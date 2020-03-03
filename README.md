### 1、修改wordpress头像访问国外地址

修改文件为：`wp-includes/pluggable.php`出的`get_avatar`函数

修改后访问的全是默认的本地头像

### 2、修改后台更新菜单，

修改地方`wp-admin/menu.php` 隐藏更新菜单

### 3、删除头部关于wordpress简介和相关文档和显示更新的部分

修改地方`wp-includes/class-wp-admin-bar.php`中的`add_menus`函数。

### 4、修改wordpress仪表盘相关显示

隐藏wordpress新闻

修改`wp-admin/includes/dashboard.php`中`WordPress Events and News`

删除欢迎模块，新增`remove_action( 'welcome_panel', 'wp_welcome_panel' );`

隐藏主题相关信息，注释掉`update_right_now_message()`函数

### 5、修改底部相关信息

修改`wp-admin/admin-footer.php`中相关函数

修改$text为空

修改`wp-admin/includes/update.php`中`core_update_footer`函数，返回为空

### 6、取消自动更新

目前已发现的

`wp-admin/includes/update.php`文件中

底部所有函数全部禁止


### 7、禁止显示更新个数

`wp-admin/menu.php`中注释掉227行显示部分

