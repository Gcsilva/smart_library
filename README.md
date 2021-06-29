<h1>Smart Library</h1>

<p>Smart Library is a modern API to control books and writers.</p>

<br />

<h2>Features</h2>
<p>This API provides tools for the following, and more:</p>
<ul>
    <li>Books Management</li>
    <li>Writers Management</li>
    <li>Linkage between Books and Writers</li>
</ul>

<br />

<h2>Installation</h2>
<p>
    <ul>
        <li>Clone this project: <code>git clone https://github.com/Gcsilva/smart_library.git</code></li>
        <li>Install the dependencies: <code>composer update</code></li>
        <li>
            Setup database <code>config/db.php</code>:
<pre><code>return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=smart_library',
    'username' => 'YOUR_USER',
    'password' => 'YOUR_PASSWORD',
    'charset' => 'utf8',
];</code></pre>
        </li>
    </ul>
</p>

<br />

<h2>Migrations</h2>
<p>Use this migration to create your tables:</p>
<pre><code>php yii migrate --migration-path @app/modules/bam/migrations</code></pre>

<br />

<h2>Modules</h2>
<p>
    The project is divided by 2 modules:
    <ul>
        <li>BAM - Book Archive Module;</li>
        <li>ADM - Author Database Module.</li>
    </ul>
</p>

<br />

<h2>BAM - Book Archive Module</h2>
<p>The BAM module can manage the books and linkage them to the writers.</p>
<ul>
    <li>
    View <pre><code>GET /smart_library/bam/{id}<br />GET /smart_library/bam?expand=bookAuthors.author<br />GET /smart_library/bam/{id}?expand=bookAuthors.author</code></pre>
    <pre><code>curl localhost/smart_library/bam/2?expand=bookAuthors.author</code></pre>
    Result
    <pre><code>{
    "id": 2,
    "name": "Yii2 Cookbook",
    "description": "Yii2 Application Development Cookbook",
    "bookAuthors": [
        {
            "id": 2,
            "book_id": 2,
            "author_id": 1,
            "author": {
                "id": 1,
                "name": "Andrew Bogdanov"
            }
        },
        {
            "id": 3,
            "book_id": 2,
            "author_id": 2,
            "author": {
                "id": 2,
                "name": "Dmitry Eliseev"
            }
        },
        {
            "id": 4,
            "book_id": 2,
            "author_id": 3,
            "author": {
                "id": 3,
                "name": "Alexander Makarov"
            }
        }
    ]
}</code></pre>
    </li>
    <li>
        Create  <pre><code>POST /smart_library/bam<br />curl -X POST -F name=BOOK -F description=DESCRIPTION http://localhost/smart_library/bam</code></pre>
    </li>
    <li>
        Update <pre><code>PUT /smart_library/bam/{id}</code><br />curl -X PUT -H "Content-Type: application/json" -d "{\"name\":\"BOOK\",\"description\":\"DESCRIPTION\"}"  localhost/smart_library/bam/3</pre>
    </li>
    <li>
        Delete <pre><code>DELETE /smart_library/bam/{id}</code><br />curl -X DELETE localhost/smart_library/bam/3</pre>
    </li>
    <li>
        Linkage to Writer
        <pre><code>curl -X POST -H "Content-Type: application/json" -d "{\"book_id\":2,\"author_id\":1}" http://localhost/smart_library/bam/book-author</code></pre>
    </li>
</ul>

<br />
<br />

<h2>ADM - Author Database Module</h2>
<p>The ADM module can manage the authors and linkage them to the books.</p>
<ul>
    <li>
    View <pre><code>GET /smart_library/adm/{id}<br />GET /smart_library/adm?expand=bookAuthors.book<br />GET /smart_library/adm/{id}?expand=bookAuthors.book</code></pre>
    <pre><code>curl localhost/smart_library/adm/3?expand=bookAuthors.book</code></pre>
    Result
    <pre><code>{
    "id": 3,
    "name": "Alexander Makarov",
    "bookAuthors": [
        {
            "id": 1,
            "book_id": 1,
            "author_id": 3,
            "book": {
                "id": 1,
                "name": "Yii 1.1 Cookbook",
                "description": "Yii 1.1 Application Development Cookbook"
            }
        },
        {
            "id": 4,
            "book_id": 2,
            "author_id": 3,
            "book": {
                "id": 2,
                "name": "Yii2 Cookbook",
                "description": "Yii2 Application Development Cookbook"
            }
        }
    ]
}</code></pre>
    </li>
    <li>
        Create  <pre><code>POST /smart_library/adm<br />curl -X POST -F name="AUTHOR" localhost/smart_library/adm</code></pre>
    </li>
    <li>
        Update <pre><code>PUT /smart_library/adm/{id}</code><br />curl -X PUT -H "Content-Type: application/json" -d "{\"name\":\"AUTHOR\"}"  localhost/smart_library/adm/3</pre>
    </li>
    <li>
        Delete <pre><code>DELETE /smart_library/adm/{id}</code><br />curl -X DELETE localhost/smart_library/adm/3</pre>
    </li>
    <li>
        Linkage to Writer
        <pre><code>curl -X POST -H "Content-Type: application/json" -d "{\"book_id\":2,\"author_id\":1}" localhost/smart_library/adm/book-author</code></pre>
    </li>
</ul>

<br />

<h1>
    Further Information
</h1>

<p>This project can do further than exposed in this documentation, feel free to explore all the files and codes.</p>
<p>I really thank you for appreciating my work.</p>