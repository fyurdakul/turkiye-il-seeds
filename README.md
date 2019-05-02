# Laravel Türkiye İl, İlçe, Semt, Mahalle Model, Migrate, Seeder
Türkiye'de ki tüm illerin migrate, model ve seed dosyalarını bulabilirsiniz.

<h1>Nasıl Kullanılır?</h1>
Yapmanız gereken sadece gerekli dosyaları laravel'inize entegre etmeniz. Database klasörünün içerisinde migration dosyası ve seed dosyası bulunuyor. 
Laravel dosyanıza gerekli dosyaları attıktan sonra

<b>php artisan migrate</b>

komutu ile tablolarınızı veritabanınıza ekleyin.

Daha sonra Laravel dosyanızda bulunan database\seeds içerisinde bulunan DatabaseSeeder.php klasörü içerisine,
<br>
<b>
$this->call(ilolustur::class); <br>
$this->call(ilceolustur::class); <br>
$this->call(semtolustur::class); <br>
$this->call(mahalleolustur::class); <br>
</b>
<br>
eklemeleri yapınız. Daha sonra

<b>php artisan db:seed</b>

komutu ile eğer model dosyasını doğru bir şekilde attıysanız tüm il, ilçe, semt ve mahalle verileri veritabanınıza eklenecektir.