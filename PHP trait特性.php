# trait特性，解决单继承问题，实现代码重用

<?php 

trait a{
    public function say()
    {   
        echo "hello\n";
    }   
}

class b
{
    use a;
    public function eat()
    {   
        echo "eat\n";
    }   
}


$b = new b;

$b->say();
$b->eat();

# 运行结果
[xxx bak]$ php trait.php 
hello
eat
