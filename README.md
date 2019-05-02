# turkiye-il-seeds
Türkiye'de ki tüm illerin migrate, model ve seed dosyalarını bulabilirsiniz.

<h1>Nasıl Kullanılır?</h1>
Yapmanız gereken sadece gerekli dosyaları laravel'inize entegre etmeniz. Database klasörünün içerisinde migration dosyası ve seed dosyası bulunuyor. 
Laravel dosyanıza gerekli dosyaları attıktan sonra

php artisan migrate

komutu ile tablolarınızı veritabanınıza ekleyin.

Daha sonra Laravel dosyanızda bulunan database\seeds içerisinde bulunan DatabaseSeeder.php klasörü içerisine,

$this->call(ilolustur::class);
$this->call(ilceolustur::class);
$this->call(semtolustur::class);
$this->call(mahalleolustur::class);

eklemeleri yapınız. Daha sonra

php artisan db:seed

komutu ile eğer model dosyasını doğru bir şekilde attıysanız tüm il, ilçe, semt ve mahalle verileri veritabanınıza eklenecektir.