<h1 style="margin-bottom: 0px;">About project</h1>
<br>
Use lib laravel/fortify to make system authenticated.
<br>
<br>
<h2>To user this repository:</h2>
<ul>
    <li>
        <h3>Clone this repository</h3>
        <pre>git clone https://github.com/Gustavo-queirozman/auth</pre>
    </li>
    <li>
        <h3>Execute in cmd</h3>
        <pre>composer install</pre>
    </li>
    <li>
        <h3>Create new file in source the project with name </h3>
        <pre>.env</pre>
    </li>
    <li>
        <h3>In new file <strong>.env</strong> use as copy config the file</h3>
        <pre>.env.example</pre>
    </li>
    <li>
        <h3>Execute in SGBD of Mysql</h3>
        <pre>create database db_auth;<br>use db_auth;</pre>
    </li>
    <li>
        <h3>Modify in file <strong>.env</strong> config of database</h3>
        <pre>DB_CONNECTION=mysql<br>DB_HOST=127.0.0.1<br>DB_PORT=3306<br>DB_DATABASE=db_auth<br>DB_USERNAME=root<br>DB_PASSWORD=</pre>
    </li>
    <li>
        <h3>Execute in cmd command to create default tables in mysql at the</h3>
        <pre>php artisan migrate</pre>
    </li>
    <li>
        <h3>Run project</h3>
        <pre>php artisan serve</pre>
    </li>
</ul>










<br>


