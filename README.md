About project
<br>
Use lib laravel/fortify to make system authenticated.
<br>
<br>
To this user is repository:
<ul>
    <li>
        <strong>Clone this reposicoty</strong>
        <pre>git clone https://github.com/Gustavo-queirozman/auth</pre>
    </li>
    <li>
        <span>In cmd execute</span>
        <pre>composer install</pre>
    </li>
    <li>
        <span>Create new file in source the project with name <strong>.env</strong></span>
    </li>
    <li>
        <span>In new file use as config the file .env.example</span>
    </li>
    <li>
        <span>In SGBD Mysql execute</span>
        <pre>
            create database db_auth;
            use db_auth;
        </pre>
    </li>
    <li>
        <span>Modify in file <strong>.env</strong> as config the database to</span>
        <pre>
            DB_CONNECTION=mysql
            DB_HOST=127.0.0.1
            DB_PORT=3306
            DB_DATABASE=db_auth
            DB_USERNAME=root
            DB_PASSWORD=
        </pre>
    </li>
    <li>
        <span>To create default tables in mysql at the cmd execute </span>
        <pre>php artisan migrate</pre>
    </li>
    <li>
        <span>Run project</span>
        <pre>php artisan seve</pre>
    </li>
</ul>










<br>


