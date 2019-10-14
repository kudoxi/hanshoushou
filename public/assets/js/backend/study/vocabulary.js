define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'study/vocabulary/index',
                    add_url: 'study/vocabulary/add',
                    edit_url: 'study/vocabulary/edit',
                    del_url: 'study/vocabulary/del',
                    multi_url: '',
                    table: 'vocabulary',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id'), sortable: true},
                        {field: 'name', title: __('Name'), operate: 'LIKE %...%'},
                        {field: 'language', title: __('Language type'), formatter: Controller.api.formatter.language},//, searchList: $.getJSON('study/vocabulary/searchlist')
                        {field: 'url', title: __('Url'), formatter: Controller.api.formatter.url},
                        {field: 'remark', title: __('Memo')},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate,width:100}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            },
           	formatter: {//渲染的方法
           		url: function (value, row, index) {
                   return '<audio src="'+value+'" controls="controls"></audio>';
           		},
           		language : function (value, row, index){
           			//return '<a href="Language/index?field=row[id]">'+value+'</a>';
           		}
           	}
        }
    };
    return Controller;
});