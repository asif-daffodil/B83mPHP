<?php  
    // basename()
    $path = $_SERVER['SCRIPT_FILENAME'];
    echo basename($path)."<br>";

    // dirname()
    echo dirname($path)."<br>";

    // copy()
    copy('test.txt', 'test2.txt');

    // file()
    $file = file('test.txt');
    echo "<pre>";
    print_r($file);
    echo "</pre>";

    // file_exists()
    if(file_exists('test.txt')){
        echo "File exists<br>";
    }

    // file_get_contents()
    $data = file_get_contents('test.txt');
    echo $data."<br>";

    // file_put_contents()
    file_put_contents('test.txt', "Hello World\nHello PHP\nHello Laravel");

    // filesize()
    echo filesize('test.txt')."<br>";

    // filetype()
    echo filetype('test.txt')."<br>";

    // is_dir()
    if(is_dir('./uploads')){
        echo "It is a directory<br>";
    }

    //  is_file()
    if(is_file('test.txt')){
        echo "It is a file<br>";
    }

    // link()
    if(is_file('test-link.txt')){
        echo "File already exits<br>";
    }else{
        link('test.txt', 'test-link.txt');
        echo "New File created<br>";
    }

    // unlink()
    if(is_file('test-link.txt')){
        unlink('test-link.txt');
        echo "File deleted<br>";
    }

    // mkdir()
    mkdir("test-uploads");

    // rmdir()
    rmdir("test-uploads");

    // move_uploaded_file()

    // pathinfo()
    $path_parts = pathinfo($path);
    echo "<pre>";
    print_r($path_parts);
    echo "</pre>";

    // extension()
    echo pathinfo($path, PATHINFO_EXTENSION)."<br>";


?>