程序结构 
============
## 简介
个人设计的一个程序, 具有模块化和热拔插的设计特点. 基于thinkphp.

## 前端模块

#### 会员模块
    
*   可以根据不同的登录借口实现不同的登录.(eg: 普通登录,微信,新浪...)
~~~
    由于不同接口的调用次数限制,最好是在何时的时机调用接口.
~~~
*   