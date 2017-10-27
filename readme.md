# Markdown是一种轻量级的标记语言 (换行:结尾两个空格后回车)

### Blade模板语法

- 数据显示
    1. 通过两个花括号包裹变量来显示传递到视图的数据
    2. 输出存在的数据 {{ isset($name) ? $name : 'Default' }}  {{ $name or 'Default' }}
    3. 显示原生数据  Hello, {!! $name !!}.
    4. 渲染 JSON 内容
    ```js
    <script>
      var app = <?php echo json_encode($array); ?>;
    </script>

    <script>
    var app = @json($array);
    </script>
    ```
- 流程控制 (@if , @elseif , @else 和 @endif 来构造 if 语句)
    1. If语句
    2. Switch语句
    3. 循环

### JS命名空间  IIFE立即执行函数
- 最常用的功能是隔离作用域,原生JS不提供会计作用域

### 结果集转为数组
[PDO_setFetchMode](http://www.cnblogs.com/vlone/p/4592846.html)
### PDOStatement类中的fetch()方法可以将结果集中当前的记录以某种方式返回，并将结果集指针移至下一行，当到达结果集末尾时返回FALSE。该方法的原型如下：
- PDO::FETCH_ASSOC          从结果集中获取以列名为索引的关联数组。
- PDO::FETCH_NUM             从结果集中获取一个以列在行中的数值偏移量为索引的值数组。
- PDO::FETCH_BOTH            这是默认值，包含上面两种数组。
- PDO::FETCH_OBJ               从结果集当前行的记录中获取其属性对应各个列名的一个对象。
- PDO::FETCH_BOUND        使用fetch()返回TRUE，并将获取的列值赋给在bindParm()方法中指 定的相应变量。
- PDO::FETCH_LAZY            创建关联数组和索引数组，以及包含列属性的一个对象，从而可以在这三种接口中任选一种。

### Laravel中改变fetch_style的方法
1. 打开app/Providers/EventServiceProvier.php,引入Illuminate\Database\Events\StatementPrepared类
2. 然后在boot方法中加入如图中给出的样例代码：
```php
Event::listen(StatementPrepared::class, function ($event) {
       $event->statement->setFetchMode(\PDO::FETCH_ASSOC);  //这里我们使用PDO::FETCH_ASSOC
});
```

### 怎么将对象数组转化为二维的纯索引数组

### url.indexof is not a function

### 路由
- 路由参数

RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_URI} (.+)/$
RewriteRule ^ %1 [L,R=301]

### http://blog.csdn.net/ghost_hell/article/details/53484438

### 表单  路由跳转
