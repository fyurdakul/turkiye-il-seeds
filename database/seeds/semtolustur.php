<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class semtolustur extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lara_semt')->truncate();

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>1,
            'semt_ad'=>'Yağcami'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>2,
            'semt_ad'=>'Hükümet'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>3,
            'semt_ad'=>'Saydam'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>4,
            'semt_ad'=>'Akkapı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>5,
            'semt_ad'=>'Gülbahçesi'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>6,
            'semt_ad'=>'Kuruköprü'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>7,
            'semt_ad'=>'Meydan'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>8,
            'semt_ad'=>'Emek'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>9,
            'semt_ad'=>'Şakirpaşa'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>10,
            'semt_ad'=>'Gazipaşa'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>11,
            'semt_ad'=>'Denizli'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>12,
            'semt_ad'=>'Ziyapaşa'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>13,
            'semt_ad'=>'Yeşilyurt'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>14,
            'semt_ad'=>'Mavibulvar/Yurt'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>15,
            'semt_ad'=>'Emekevler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>16,
            'semt_ad'=>'Yeşilevler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>17,
            'semt_ad'=>'Fevzipaşa'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>18,
            'semt_ad'=>'Gürselpaşa'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>19,
            'semt_ad'=>'Yeşiloba'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>20,
            'semt_ad'=>'2000 Evler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>21,
            'semt_ad'=>'Küçükdikili'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>22,
            'semt_ad'=>'Karayusuflu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>23,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>12,
            'id'=>24,
            'semt_ad'=>'Hadırlı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>25,
            'semt_ad'=>'Karacaoğlan'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>26,
            'semt_ad'=>'Bahçelievler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>27,
            'semt_ad'=>'Yavuzlar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>28,
            'semt_ad'=>'Kazımkarabekir'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>29,
            'semt_ad'=>'Pttevleri'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>30,
            'semt_ad'=>'Kiremithane'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>31,
            'semt_ad'=>'Haydaroğlu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>32,
            'semt_ad'=>'Karşıyaka'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>33,
            'semt_ad'=>'Yamaçlı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>34,
            'semt_ad'=>'Anadolu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>35,
            'semt_ad'=>'Keresteciler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>36,
            'semt_ad'=>'Üniversite'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>37,
            'semt_ad'=>'Abdioğlu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>38,
            'semt_ad'=>'Doğankent'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>39,
            'semt_ad'=>'Havutlu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>40,
            'semt_ad'=>'Solaklı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>41,
            'semt_ad'=>'Yunusoğlu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>42,
            'semt_ad'=>'Geçitli'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>43,
            'semt_ad'=>'Yakapınar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>15,
            'id'=>44,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>11,
            'id'=>45,
            'semt_ad'=>'Sarıçam'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>11,
            'id'=>46,
            'semt_ad'=>'Yıldırımbeyazıt'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>11,
            'id'=>47,
            'semt_ad'=>'Mehmetakifersoy'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>11,
            'id'=>48,
            'semt_ad'=>'Remzioğuzarık'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>11,
            'id'=>49,
            'semt_ad'=>'Baklalı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>11,
            'id'=>50,
            'semt_ad'=>'Buruk'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>11,
            'id'=>51,
            'semt_ad'=>'Sofulu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>11,
            'id'=>52,
            'semt_ad'=>'Kürkçüler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>11,
            'id'=>53,
            'semt_ad'=>'Suluca'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>11,
            'id'=>54,
            'semt_ad'=>'İncirlik'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>11,
            'id'=>55,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>3,
            'id'=>56,
            'semt_ad'=>'Mahfesığmaz'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>3,
            'id'=>57,
            'semt_ad'=>'Beyazevler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>3,
            'id'=>58,
            'semt_ad'=>'Yurt'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>3,
            'id'=>59,
            'semt_ad'=>'Huzurevleri'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>3,
            'id'=>60,
            'semt_ad'=>'Yüzüncüyıl'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>3,
            'id'=>61,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>1,
            'id'=>62,
            'semt_ad'=>'Karsantı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>1,
            'id'=>63,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>2,
            'id'=>64,
            'semt_ad'=>'Çarşı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>2,
            'id'=>65,
            'semt_ad'=>'Sanayi'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>2,
            'id'=>66,
            'semt_ad'=>'Emek'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>2,
            'id'=>67,
            'semt_ad'=>'Namıkkemal'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>2,
            'id'=>68,
            'semt_ad'=>'Türlübaş'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>2,
            'id'=>69,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>2,
            'id'=>70,
            'semt_ad'=>'Kösreli'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>2,
            'id'=>71,
            'semt_ad'=>'Doruk'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>2,
            'id'=>72,
            'semt_ad'=>'Mercimek'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>2,
            'id'=>73,
            'semt_ad'=>'Mustafabeyli'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>2,
            'id'=>74,
            'semt_ad'=>'Sarımazı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>2,
            'id'=>75,
            'semt_ad'=>'Kurtpınarı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>2,
            'id'=>76,
            'semt_ad'=>'Büyükmangıt'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>4,
            'id'=>77,
            'semt_ad'=>'Feke'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>4,
            'id'=>78,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>5,
            'id'=>79,
            'semt_ad'=>'İmamoğlu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>5,
            'id'=>80,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>6,
            'id'=>81,
            'semt_ad'=>'Karaisalı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>6,
            'id'=>82,
            'semt_ad'=>'Çatalan'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>6,
            'id'=>83,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>6,
            'id'=>84,
            'semt_ad'=>'Salbaş'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>7,
            'id'=>85,
            'semt_ad'=>'Karataş'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>7,
            'id'=>86,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>7,
            'id'=>87,
            'semt_ad'=>'Tuzla'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>7,
            'id'=>88,
            'semt_ad'=>'Bahçe'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>8,
            'id'=>89,
            'semt_ad'=>'Şevkiye'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>8,
            'id'=>90,
            'semt_ad'=>'Çarşı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>8,
            'id'=>91,
            'semt_ad'=>'Aslanpaşa'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>8,
            'id'=>92,
            'semt_ad'=>'Mahmutlu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>8,
            'id'=>93,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>8,
            'id'=>94,
            'semt_ad'=>'Tepecikören'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>9,
            'id'=>95,
            'semt_ad'=>'Pozantı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>9,
            'id'=>96,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>9,
            'id'=>97,
            'semt_ad'=>'Kamışlı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>9,
            'id'=>98,
            'semt_ad'=>'Akçatekir'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>10,
            'id'=>99,
            'semt_ad'=>'Saimbeyli'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>10,
            'id'=>100,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>13,
            'id'=>101,
            'semt_ad'=>'Tufanbeyli'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>13,
            'id'=>102,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>14,
            'id'=>103,
            'semt_ad'=>'Yumurtalık'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>14,
            'id'=>104,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>16,
            'id'=>105,
            'semt_ad'=>'Sümerevler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>16,
            'id'=>106,
            'semt_ad'=>'Yenisanayi'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>16,
            'id'=>107,
            'semt_ad'=>'Eskisaray'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>16,
            'id'=>108,
            'semt_ad'=>'İmamağa'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>16,
            'id'=>109,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>16,
            'id'=>110,
            'semt_ad'=>'Akpınar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>16,
            'id'=>111,
            'semt_ad'=>'Bağpınar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>16,
            'id'=>112,
            'semt_ad'=>'Kuyucak'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>16,
            'id'=>113,
            'semt_ad'=>'Kömür'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>16,
            'id'=>114,
            'semt_ad'=>'Hasancık'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>16,
            'id'=>115,
            'semt_ad'=>'Karıcık'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>17,
            'id'=>116,
            'semt_ad'=>'Besni'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>17,
            'id'=>117,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>17,
            'id'=>118,
            'semt_ad'=>'Çakırhüyük'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>17,
            'id'=>119,
            'semt_ad'=>'Suvarlı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>17,
            'id'=>120,
            'semt_ad'=>'Şambayat'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>17,
            'id'=>121,
            'semt_ad'=>'Üçgöz'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>17,
            'id'=>122,
            'semt_ad'=>'Kesmetepe'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>18,
            'id'=>123,
            'semt_ad'=>'Çelikhan'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>18,
            'id'=>124,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>18,
            'id'=>125,
            'semt_ad'=>'Pınarbaşı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>19,
            'id'=>126,
            'semt_ad'=>'Gerger'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>19,
            'id'=>127,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>20,
            'id'=>128,
            'semt_ad'=>'Gölbaşı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>20,
            'id'=>129,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>20,
            'id'=>130,
            'semt_ad'=>'Belören'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>20,
            'id'=>131,
            'semt_ad'=>'Harmanlı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>20,
            'id'=>132,
            'semt_ad'=>'Balkar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>21,
            'id'=>133,
            'semt_ad'=>'Kahta'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>21,
            'id'=>134,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>21,
            'id'=>135,
            'semt_ad'=>'Akıncılar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>21,
            'id'=>136,
            'semt_ad'=>'Damlacık'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>21,
            'id'=>137,
            'semt_ad'=>'Narince'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>21,
            'id'=>138,
            'semt_ad'=>'Bölükyayla'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>22,
            'id'=>139,
            'semt_ad'=>'Samsat'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>22,
            'id'=>140,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>23,
            'id'=>141,
            'semt_ad'=>'Sincik'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>23,
            'id'=>142,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>23,
            'id'=>143,
            'semt_ad'=>'Yarpuzlu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>23,
            'id'=>144,
            'semt_ad'=>'İnlice'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>24,
            'id'=>145,
            'semt_ad'=>'Tut'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>24,
            'id'=>146,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>147,
            'semt_ad'=>'Sahipata'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>148,
            'semt_ad'=>'Harbiş'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>149,
            'semt_ad'=>'Çarşı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>150,
            'semt_ad'=>'Dumlupınar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>151,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>152,
            'semt_ad'=>'Taşoluk'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>153,
            'semt_ad'=>'Sülümenli'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>154,
            'semt_ad'=>'Susuz'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>155,
            'semt_ad'=>'Sülün'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>156,
            'semt_ad'=>'Kayıhan'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>157,
            'semt_ad'=>'Yaylabağı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>158,
            'semt_ad'=>'Fethibey'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>159,
            'semt_ad'=>'Çayırbağ'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>160,
            'semt_ad'=>'Gebeceler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>161,
            'semt_ad'=>'Beyyazı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>25,
            'id'=>162,
            'semt_ad'=>'Heybeli'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>26,
            'id'=>163,
            'semt_ad'=>'Başmakçı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>26,
            'id'=>164,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>27,
            'id'=>165,
            'semt_ad'=>'Bayat'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>27,
            'id'=>166,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>28,
            'id'=>167,
            'semt_ad'=>'Bolvadin'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>28,
            'id'=>168,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>28,
            'id'=>169,
            'semt_ad'=>'Dişli'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>28,
            'id'=>170,
            'semt_ad'=>'Kemerkaya'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>29,
            'id'=>171,
            'semt_ad'=>'Çay'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>29,
            'id'=>172,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>29,
            'id'=>173,
            'semt_ad'=>'İnli'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>29,
            'id'=>174,
            'semt_ad'=>'Pazarağaç'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>30,
            'id'=>175,
            'semt_ad'=>'Çobanlar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>30,
            'id'=>176,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>30,
            'id'=>177,
            'semt_ad'=>'Gebeceler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>30,
            'id'=>178,
            'semt_ad'=>'Sülümenli'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>30,
            'id'=>179,
            'semt_ad'=>'Kocaöz'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>31,
            'id'=>180,
            'semt_ad'=>'Dazkırı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>31,
            'id'=>181,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>32,
            'id'=>182,
            'semt_ad'=>'Dinar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>32,
            'id'=>183,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>32,
            'id'=>184,
            'semt_ad'=>'Dombayova'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>32,
            'id'=>185,
            'semt_ad'=>'Haydarlı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>32,
            'id'=>186,
            'semt_ad'=>'Tatarlı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>32,
            'id'=>187,
            'semt_ad'=>'İncesu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>33,
            'id'=>188,
            'semt_ad'=>'Emirdağ'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>33,
            'id'=>189,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>33,
            'id'=>190,
            'semt_ad'=>'Davulga'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>33,
            'id'=>191,
            'semt_ad'=>'Gömü'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>33,
            'id'=>192,
            'semt_ad'=>'Ümraniye'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>34,
            'id'=>193,
            'semt_ad'=>'Evciler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>34,
            'id'=>194,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>34,
            'id'=>195,
            'semt_ad'=>'Gökçek'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>35,
            'id'=>196,
            'semt_ad'=>'Hocalar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>35,
            'id'=>197,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>35,
            'id'=>198,
            'semt_ad'=>'Yeşilhisar(Ahırhisar)'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>35,
            'id'=>199,
            'semt_ad'=>'Yavaşlar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>36,
            'id'=>200,
            'semt_ad'=>'İhsaniye'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>36,
            'id'=>201,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>36,
            'id'=>202,
            'semt_ad'=>'Döğer'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>36,
            'id'=>203,
            'semt_ad'=>'Karacaahmet'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>36,
            'id'=>204,
            'semt_ad'=>'Kayıhan'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>36,
            'id'=>205,
            'semt_ad'=>'Gazlıgöl'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>36,
            'id'=>206,
            'semt_ad'=>'Yaylabağı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>36,
            'id'=>207,
            'semt_ad'=>'Bozhüyük'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>37,
            'id'=>208,
            'semt_ad'=>'İscehisar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>37,
            'id'=>209,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>37,
            'id'=>210,
            'semt_ad'=>'Alanyurt'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>37,
            'id'=>211,
            'semt_ad'=>'Seydiler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>38,
            'id'=>212,
            'semt_ad'=>'Kızılören'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>38,
            'id'=>213,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>39,
            'id'=>214,
            'semt_ad'=>'Sandıklı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>39,
            'id'=>215,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>39,
            'id'=>216,
            'semt_ad'=>'Akharım'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>40,
            'id'=>217,
            'semt_ad'=>'Sinanpaşa'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>40,
            'id'=>218,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>40,
            'id'=>219,
            'semt_ad'=>'Ahmetpaşa'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>40,
            'id'=>220,
            'semt_ad'=>'Akören'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>40,
            'id'=>221,
            'semt_ad'=>'Düzağaç'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>40,
            'id'=>222,
            'semt_ad'=>'Kılıçarslan'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>40,
            'id'=>223,
            'semt_ad'=>'Kırka'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>40,
            'id'=>224,
            'semt_ad'=>'Taşoluk'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>40,
            'id'=>225,
            'semt_ad'=>'Tınaztepe'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>41,
            'id'=>226,
            'semt_ad'=>'Sultandağı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>41,
            'id'=>227,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>41,
            'id'=>228,
            'semt_ad'=>'Dereçine'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>41,
            'id'=>229,
            'semt_ad'=>'Yakasinek'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>41,
            'id'=>230,
            'semt_ad'=>'Yeşilçiftlik'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>42,
            'id'=>231,
            'semt_ad'=>'Şuhut'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>42,
            'id'=>232,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>42,
            'id'=>233,
            'semt_ad'=>'Balçıkhisar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>42,
            'id'=>234,
            'semt_ad'=>'Karaadilli'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>43,
            'id'=>235,
            'semt_ad'=>'Kazımkarabekir'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>43,
            'id'=>236,
            'semt_ad'=>'Fevziçakmak'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>43,
            'id'=>237,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>44,
            'id'=>238,
            'semt_ad'=>'Hamur'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>44,
            'id'=>239,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>45,
            'id'=>240,
            'semt_ad'=>'Diyadin'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>45,
            'id'=>241,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>46,
            'id'=>242,
            'semt_ad'=>'Doğubeyazıt'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>46,
            'id'=>243,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>47,
            'id'=>244,
            'semt_ad'=>'Taşlıçay'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>47,
            'id'=>245,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>48,
            'id'=>246,
            'semt_ad'=>'Tutak'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>48,
            'id'=>247,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>49,
            'id'=>248,
            'semt_ad'=>'Eleşkirt'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>49,
            'id'=>249,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>49,
            'id'=>250,
            'semt_ad'=>'Yücekapı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>49,
            'id'=>251,
            'semt_ad'=>'Tahir'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>50,
            'id'=>252,
            'semt_ad'=>'Patnos'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>50,
            'id'=>253,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>50,
            'id'=>254,
            'semt_ad'=>'Dedeli'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>50,
            'id'=>255,
            'semt_ad'=>'Doğansu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>50,
            'id'=>256,
            'semt_ad'=>'Sarısu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>51,
            'id'=>257,
            'semt_ad'=>'Gökmedrese'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>51,
            'id'=>258,
            'semt_ad'=>'Dereboyu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>51,
            'id'=>259,
            'semt_ad'=>'Eryatağı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>51,
            'id'=>260,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>51,
            'id'=>261,
            'semt_ad'=>'Ziyaret'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>51,
            'id'=>262,
            'semt_ad'=>'Akdağ'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>51,
            'id'=>263,
            'semt_ad'=>'Yeşilyenice'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>51,
            'id'=>264,
            'semt_ad'=>'Ezinepazarı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>51,
            'id'=>265,
            'semt_ad'=>'İpekköy'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>52,
            'id'=>266,
            'semt_ad'=>'Göynücek'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>52,
            'id'=>267,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>53,
            'id'=>268,
            'semt_ad'=>'Gümüşhacıköy'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>53,
            'id'=>269,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>53,
            'id'=>270,
            'semt_ad'=>'Bucakoğlu(Saraycık)'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>53,
            'id'=>271,
            'semt_ad'=>'Çalköy'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>53,
            'id'=>272,
            'semt_ad'=>'İmirler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>54,
            'id'=>273,
            'semt_ad'=>'Hamamözü'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>54,
            'id'=>274,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>54,
            'id'=>275,
            'semt_ad'=>'Arpadere'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>54,
            'id'=>276,
            'semt_ad'=>'Aşağıovacık'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>55,
            'id'=>277,
            'semt_ad'=>'Merzifon'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>55,
            'id'=>278,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>55,
            'id'=>279,
            'semt_ad'=>'Alıcık'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>55,
            'id'=>280,
            'semt_ad'=>'Sarıbuğday'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>56,
            'id'=>281,
            'semt_ad'=>'Suluova'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>56,
            'id'=>282,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>57,
            'id'=>283,
            'semt_ad'=>'Taşova'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>57,
            'id'=>284,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>285,
            'semt_ad'=>'Ulus/İsmetpaşa'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>286,
            'semt_ad'=>'Opera/Gençlikparkı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>287,
            'semt_ad'=>'Atasanayi'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>288,
            'semt_ad'=>'İskitler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>289,
            'semt_ad'=>'Altındağ'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>290,
            'semt_ad'=>'Telsizler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>291,
            'semt_ad'=>'Yıldırımbeyazıt/Dışkapı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>292,
            'semt_ad'=>'Aydınlıkevler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>293,
            'semt_ad'=>'Hasköy'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>294,
            'semt_ad'=>'Yeşilöz'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>295,
            'semt_ad'=>'Siteler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>296,
            'semt_ad'=>'Samanpazarı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>297,
            'semt_ad'=>'Hisar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>298,
            'semt_ad'=>'Anafartalar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>299,
            'semt_ad'=>'Önder'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>300,
            'semt_ad'=>'İstasyon'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>301,
            'semt_ad'=>'Ulubey'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>59,
            'id'=>302,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>303,
            'semt_ad'=>'Sıhhiye'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>304,
            'semt_ad'=>'Kızılay'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>305,
            'semt_ad'=>'Sıhhiye/Zafer'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>306,
            'semt_ad'=>'Yenişehir'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>307,
            'semt_ad'=>'Dikmen/Oran'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>308,
            'semt_ad'=>'Öveçler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>309,
            'semt_ad'=>'Bahçelievler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>310,
            'semt_ad'=>'Beşevler/Emek'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>311,
            'semt_ad'=>'Söğütözü'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>312,
            'semt_ad'=>'Balgat'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>313,
            'semt_ad'=>'Çayyolu'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>314,
            'semt_ad'=>'Ayrancı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>315,
            'semt_ad'=>'Yıldız'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>316,
            'semt_ad'=>'Maltepe'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>317,
            'semt_ad'=>'Anıttepe'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>318,
            'semt_ad'=>'Cebeci'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>319,
            'semt_ad'=>'Topraklık/Kurtuluş'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>320,
            'semt_ad'=>'Kırkkonaklar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>321,
            'semt_ad'=>'Güvenpark'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>322,
            'semt_ad'=>'Hürriyet'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>323,
            'semt_ad'=>'Küçükesat'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>324,
            'semt_ad'=>'Zafertepe'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>325,
            'semt_ad'=>'Kavaklıdere'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>326,
            'semt_ad'=>'Basınsitesi'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>327,
            'semt_ad'=>'Gaziosmanpaşa(Gop)'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>328,
            'semt_ad'=>'Yüzüncüyıl/Karakusunlar'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>329,
            'semt_ad'=>'Bilkent/Bilkentplaza/Beytepe'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>64,
            'id'=>330,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>67,
            'id'=>331,
            'semt_ad'=>'Çarşı'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>67,
            'id'=>332,
            'semt_ad'=>'Eryaman'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>67,
            'id'=>333,
            'semt_ad'=>'Zırhlıbirlikler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>67,
            'id'=>334,
            'semt_ad'=>'Şaşmaz'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>67,
            'id'=>335,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>74,
            'id'=>336,
            'semt_ad'=>'Etlik/İncirli'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>74,
            'id'=>337,
            'semt_ad'=>'Esertepe/Yayla'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>74,
            'id'=>338,
            'semt_ad'=>'Kalaba'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>74,
            'id'=>339,
            'semt_ad'=>'Şehitkubilay'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>74,
            'id'=>340,
            'semt_ad'=>'Ufuktepe'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>74,
            'id'=>341,
            'semt_ad'=>'Sanatoryum'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>74,
            'id'=>342,
            'semt_ad'=>'Aktepe'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>74,
            'id'=>343,
            'semt_ad'=>'Şenlik/Güçlükaya'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>74,
            'id'=>344,
            'semt_ad'=>'Bağlum'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>74,
            'id'=>345,
            'semt_ad'=>'Köyler'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>76,
            'id'=>346,
            'semt_ad'=>'Mamak'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>76,
            'id'=>347,
            'semt_ad'=>'Kayaş'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>76,
            'id'=>348,
            'semt_ad'=>'Hüseyingazi'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>76,
            'id'=>349,
            'semt_ad'=>'Demirlibahçe'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>76,
            'id'=>350,
            'semt_ad'=>'Gülveren'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>76,
            'id'=>351,
            'semt_ad'=>'Misket'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>76,
            'id'=>352,
            'semt_ad'=>'Boğaziçi'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>76,
            'id'=>353,
            'semt_ad'=>'Abidinpaşa'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>76,
            'id'=>354,
            'semt_ad'=>'Akdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>76,
            'id'=>355,
            'semt_ad'=>'Kutludüğün'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>76,
            'id'=>356,
            'semt_ad'=>'Lalahan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>76,
            'id'=>357,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>80,
            'id'=>358,
            'semt_ad'=>'Sincan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>80,
            'id'=>359,
            'semt_ad'=>'Fatih'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>80,
            'id'=>360,
            'semt_ad'=>'Yenikent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>80,
            'id'=>361,
            'semt_ad'=>'Temelli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>80,
            'id'=>362,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>82,
            'id'=>363,
            'semt_ad'=>'Yenimahalle'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>82,
            'id'=>364,
            'semt_ad'=>'Akın'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>82,
            'id'=>365,
            'semt_ad'=>'Karşıyaka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>82,
            'id'=>366,
            'semt_ad'=>'Demetevler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>82,
            'id'=>367,
            'semt_ad'=>'Şentepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>82,
            'id'=>368,
            'semt_ad'=>'Çiğdemtepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>82,
            'id'=>369,
            'semt_ad'=>'Batıkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>82,
            'id'=>370,
            'semt_ad'=>'Ostim'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>82,
            'id'=>371,
            'semt_ad'=>'İvedikorganizesanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>82,
            'id'=>372,
            'semt_ad'=>'A.O.Çiftliği(Aoç)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>82,
            'id'=>373,
            'semt_ad'=>'Çayyolu/Ümitköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>82,
            'id'=>374,
            'semt_ad'=>'İstasyon'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>82,
            'id'=>375,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>82,
            'id'=>376,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>69,
            'id'=>377,
            'semt_ad'=>'Gölbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>69,
            'id'=>378,
            'semt_ad'=>'Selametli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>69,
            'id'=>379,
            'semt_ad'=>'Bezirhane'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>69,
            'id'=>380,
            'semt_ad'=>'Karagedik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>69,
            'id'=>381,
            'semt_ad'=>'Oyaca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>69,
            'id'=>382,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>79,
            'id'=>383,
            'semt_ad'=>'Pursaklar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>79,
            'id'=>384,
            'semt_ad'=>'Sarayköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>79,
            'id'=>385,
            'semt_ad'=>'Sirkeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>79,
            'id'=>386,
            'semt_ad'=>'Altınova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>58,
            'id'=>387,
            'semt_ad'=>'Akyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>58,
            'id'=>388,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>60,
            'id'=>389,
            'semt_ad'=>'Ayaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>60,
            'id'=>390,
            'semt_ad'=>'Çanıllı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>60,
            'id'=>391,
            'semt_ad'=>'Sinanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>60,
            'id'=>392,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>61,
            'id'=>393,
            'semt_ad'=>'Bala'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>61,
            'id'=>394,
            'semt_ad'=>'Kesikköprü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>61,
            'id'=>395,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>61,
            'id'=>396,
            'semt_ad'=>'Karaali'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>61,
            'id'=>397,
            'semt_ad'=>'Afşar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>62,
            'id'=>398,
            'semt_ad'=>'Beypazarı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>62,
            'id'=>399,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>63,
            'id'=>400,
            'semt_ad'=>'Çamlıdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>63,
            'id'=>401,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>65,
            'id'=>402,
            'semt_ad'=>'Çubuk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>65,
            'id'=>403,
            'semt_ad'=>'Yukarıçavundur'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>65,
            'id'=>404,
            'semt_ad'=>'Esenboğa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>65,
            'id'=>405,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>66,
            'id'=>406,
            'semt_ad'=>'Elmadağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>66,
            'id'=>407,
            'semt_ad'=>'Hasanoğlan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>66,
            'id'=>408,
            'semt_ad'=>'Yeşildere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>66,
            'id'=>409,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>68,
            'id'=>410,
            'semt_ad'=>'Evren'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>68,
            'id'=>411,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>70,
            'id'=>412,
            'semt_ad'=>'Güdül'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>70,
            'id'=>413,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>71,
            'id'=>414,
            'semt_ad'=>'Haymana'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>71,
            'id'=>415,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>71,
            'id'=>416,
            'semt_ad'=>'Balçıkhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>72,
            'id'=>417,
            'semt_ad'=>'Kalecik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>72,
            'id'=>418,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>73,
            'id'=>419,
            'semt_ad'=>'Kazan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>73,
            'id'=>420,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>75,
            'id'=>421,
            'semt_ad'=>'Kızılcahamam'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>75,
            'id'=>422,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>75,
            'id'=>423,
            'semt_ad'=>'Pazar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>77,
            'id'=>424,
            'semt_ad'=>'Nallıhan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>77,
            'id'=>425,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>78,
            'id'=>426,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>78,
            'id'=>427,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>78,
            'id'=>428,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>78,
            'id'=>429,
            'semt_ad'=>'Yenimehmetli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>81,
            'id'=>430,
            'semt_ad'=>'Şereflikoçhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>81,
            'id'=>431,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>100,
            'id'=>432,
            'semt_ad'=>'Meltem'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>100,
            'id'=>433,
            'semt_ad'=>'Bahçelievler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>100,
            'id'=>434,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>100,
            'id'=>435,
            'semt_ad'=>'Eskisanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>100,
            'id'=>436,
            'semt_ad'=>'Kızıltoprak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>100,
            'id'=>437,
            'semt_ad'=>'Yenigün'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>100,
            'id'=>438,
            'semt_ad'=>'Gençlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>100,
            'id'=>439,
            'semt_ad'=>'Fener'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>100,
            'id'=>440,
            'semt_ad'=>'Lara'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>100,
            'id'=>441,
            'semt_ad'=>'Güzeloluk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>100,
            'id'=>442,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>95,
            'id'=>443,
            'semt_ad'=>'Ahatlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>95,
            'id'=>444,
            'semt_ad'=>'Duraliler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>95,
            'id'=>445,
            'semt_ad'=>'Dokuma'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>95,
            'id'=>446,
            'semt_ad'=>'Yeniemek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>95,
            'id'=>447,
            'semt_ad'=>'Erenköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>95,
            'id'=>448,
            'semt_ad'=>'Sütçüler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>95,
            'id'=>449,
            'semt_ad'=>'Düdenbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>95,
            'id'=>450,
            'semt_ad'=>'Altınova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>95,
            'id'=>451,
            'semt_ad'=>'Varsak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>95,
            'id'=>452,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>96,
            'id'=>453,
            'semt_ad'=>'Arapsuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>96,
            'id'=>454,
            'semt_ad'=>'Beldibi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>96,
            'id'=>455,
            'semt_ad'=>'Doyran'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>96,
            'id'=>456,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>84,
            'id'=>457,
            'semt_ad'=>'Çalkaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>84,
            'id'=>458,
            'semt_ad'=>'Aksu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>84,
            'id'=>459,
            'semt_ad'=>'Pınarlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>84,
            'id'=>460,
            'semt_ad'=>'Yurtpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>84,
            'id'=>461,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>84,
            'id'=>462,
            'semt_ad'=>'Karaöz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>86,
            'id'=>463,
            'semt_ad'=>'Yeniköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>86,
            'id'=>464,
            'semt_ad'=>'Düzlerçamı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>86,
            'id'=>465,
            'semt_ad'=>'Yeşilbayır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>86,
            'id'=>466,
            'semt_ad'=>'Çığlık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>86,
            'id'=>467,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>83,
            'id'=>468,
            'semt_ad'=>'Akseki'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>83,
            'id'=>469,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>470,
            'semt_ad'=>'Alanya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>471,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>472,
            'semt_ad'=>'Avsallar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>473,
            'semt_ad'=>'Çıplaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>474,
            'semt_ad'=>'Demirtaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>475,
            'semt_ad'=>'İncekum (Yeşilköy)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>476,
            'semt_ad'=>'Kargıcak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>477,
            'semt_ad'=>'Kestel(Çamyolu)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>478,
            'semt_ad'=>'Konaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>479,
            'semt_ad'=>'Mahmutlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>480,
            'semt_ad'=>'Oba'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>481,
            'semt_ad'=>'Okurcalar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>482,
            'semt_ad'=>'Payallar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>483,
            'semt_ad'=>'Tosmur'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>85,
            'id'=>484,
            'semt_ad'=>'Türkler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>87,
            'id'=>485,
            'semt_ad'=>'Elmalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>87,
            'id'=>486,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>87,
            'id'=>487,
            'semt_ad'=>'Gölova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>87,
            'id'=>488,
            'semt_ad'=>'Yuva'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>88,
            'id'=>489,
            'semt_ad'=>'Finike'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>88,
            'id'=>490,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>88,
            'id'=>491,
            'semt_ad'=>'Hasyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>88,
            'id'=>492,
            'semt_ad'=>'Sahilkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>88,
            'id'=>493,
            'semt_ad'=>'Turunçova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>88,
            'id'=>494,
            'semt_ad'=>'Yeşilyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>89,
            'id'=>495,
            'semt_ad'=>'Gazipaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>89,
            'id'=>496,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>89,
            'id'=>497,
            'semt_ad'=>'Kahyalar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>90,
            'id'=>498,
            'semt_ad'=>'Gündoğmuş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>90,
            'id'=>499,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>91,
            'id'=>500,
            'semt_ad'=>'İbradı (Aydınkent)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>91,
            'id'=>501,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>92,
            'id'=>502,
            'semt_ad'=>'Kale(Demre)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>92,
            'id'=>503,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>92,
            'id'=>504,
            'semt_ad'=>'Beymelek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>93,
            'id'=>505,
            'semt_ad'=>'Kaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>93,
            'id'=>506,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>93,
            'id'=>507,
            'semt_ad'=>'Kalkan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>93,
            'id'=>508,
            'semt_ad'=>'Kınık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>93,
            'id'=>509,
            'semt_ad'=>'Ova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>93,
            'id'=>510,
            'semt_ad'=>'Yeşilköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>94,
            'id'=>511,
            'semt_ad'=>'Kemer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>94,
            'id'=>512,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>94,
            'id'=>513,
            'semt_ad'=>'Çamyuva'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>94,
            'id'=>514,
            'semt_ad'=>'Göynük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>94,
            'id'=>515,
            'semt_ad'=>'Tekirova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>97,
            'id'=>516,
            'semt_ad'=>'Korkuteli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>97,
            'id'=>517,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>97,
            'id'=>518,
            'semt_ad'=>'Küçükköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>97,
            'id'=>519,
            'semt_ad'=>'Yelten'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>98,
            'id'=>520,
            'semt_ad'=>'Kumluca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>98,
            'id'=>521,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>98,
            'id'=>522,
            'semt_ad'=>'Beykonak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>98,
            'id'=>523,
            'semt_ad'=>'Çavuşköy (Adrasan)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>98,
            'id'=>524,
            'semt_ad'=>'Mavikent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>99,
            'id'=>525,
            'semt_ad'=>'Manavgat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>99,
            'id'=>526,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>99,
            'id'=>527,
            'semt_ad'=>'Çolaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>99,
            'id'=>528,
            'semt_ad'=>'Evrenseki'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>99,
            'id'=>529,
            'semt_ad'=>'Gündoğdu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>99,
            'id'=>530,
            'semt_ad'=>'Ilıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>99,
            'id'=>531,
            'semt_ad'=>'Kızılot'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>99,
            'id'=>532,
            'semt_ad'=>'Oymapınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>99,
            'id'=>533,
            'semt_ad'=>'Sarılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>99,
            'id'=>534,
            'semt_ad'=>'Side'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>99,
            'id'=>535,
            'semt_ad'=>'Taşağıl'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>101,
            'id'=>536,
            'semt_ad'=>'Serik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>101,
            'id'=>537,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>101,
            'id'=>538,
            'semt_ad'=>'Belek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>101,
            'id'=>539,
            'semt_ad'=>'Belkıs'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>101,
            'id'=>540,
            'semt_ad'=>'Boğazkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>101,
            'id'=>541,
            'semt_ad'=>'Çandır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>101,
            'id'=>542,
            'semt_ad'=>'Gebiz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>101,
            'id'=>543,
            'semt_ad'=>'Kadriye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>101,
            'id'=>544,
            'semt_ad'=>'Karadayı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>101,
            'id'=>545,
            'semt_ad'=>'Yukarıkocayatak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>104,
            'id'=>546,
            'semt_ad'=>'Artvin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>104,
            'id'=>547,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>104,
            'id'=>548,
            'semt_ad'=>'Ortaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>104,
            'id'=>549,
            'semt_ad'=>'Zeytinlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>102,
            'id'=>550,
            'semt_ad'=>'Ardanuç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>102,
            'id'=>551,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>102,
            'id'=>552,
            'semt_ad'=>'Aşağıırmaklar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>103,
            'id'=>553,
            'semt_ad'=>'Arhavi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>103,
            'id'=>554,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>103,
            'id'=>555,
            'semt_ad'=>'Ortacalar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>105,
            'id'=>556,
            'semt_ad'=>'Borçka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>105,
            'id'=>557,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>105,
            'id'=>558,
            'semt_ad'=>'Camili'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>105,
            'id'=>559,
            'semt_ad'=>'Muratlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>106,
            'id'=>560,
            'semt_ad'=>'Hopa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>106,
            'id'=>561,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>106,
            'id'=>562,
            'semt_ad'=>'Kemalpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>107,
            'id'=>563,
            'semt_ad'=>'Göktaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>107,
            'id'=>564,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>108,
            'id'=>565,
            'semt_ad'=>'Şavşat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>108,
            'id'=>566,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>108,
            'id'=>567,
            'semt_ad'=>'Veliköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>109,
            'id'=>568,
            'semt_ad'=>'Yusufeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>109,
            'id'=>569,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>109,
            'id'=>570,
            'semt_ad'=>'Demirkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>109,
            'id'=>571,
            'semt_ad'=>'Öğdem'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>109,
            'id'=>572,
            'semt_ad'=>'Sarıgöl(Taşkıran)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>110,
            'id'=>573,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>110,
            'id'=>574,
            'semt_ad'=>'Kurtuluş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>110,
            'id'=>575,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>110,
            'id'=>576,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>110,
            'id'=>577,
            'semt_ad'=>'Çeştepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>110,
            'id'=>578,
            'semt_ad'=>'Dalama'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>110,
            'id'=>579,
            'semt_ad'=>'Umurlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>110,
            'id'=>580,
            'semt_ad'=>'Ovaeymiri(Ovaeğmir)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>110,
            'id'=>581,
            'semt_ad'=>'Tepecik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>111,
            'id'=>582,
            'semt_ad'=>'Bozdoğan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>111,
            'id'=>583,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>111,
            'id'=>584,
            'semt_ad'=>'Yazıkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>112,
            'id'=>585,
            'semt_ad'=>'Çubukdağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>112,
            'id'=>586,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>113,
            'id'=>587,
            'semt_ad'=>'Çine'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>113,
            'id'=>588,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>113,
            'id'=>589,
            'semt_ad'=>'Akçaova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>115,
            'id'=>590,
            'semt_ad'=>'Germencik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>115,
            'id'=>591,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>115,
            'id'=>592,
            'semt_ad'=>'Hıdırbeyli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>115,
            'id'=>593,
            'semt_ad'=>'Ortaklar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>116,
            'id'=>594,
            'semt_ad'=>'İncirliova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>116,
            'id'=>595,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>116,
            'id'=>596,
            'semt_ad'=>'Acarlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>117,
            'id'=>597,
            'semt_ad'=>'Karacasu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>117,
            'id'=>598,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>118,
            'id'=>599,
            'semt_ad'=>'Karpuzlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>118,
            'id'=>600,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>119,
            'id'=>601,
            'semt_ad'=>'Koçarlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>119,
            'id'=>602,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>120,
            'id'=>603,
            'semt_ad'=>'Köşk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>120,
            'id'=>604,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>121,
            'id'=>605,
            'semt_ad'=>'Kuşadası'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>121,
            'id'=>606,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>121,
            'id'=>607,
            'semt_ad'=>'Davutlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>121,
            'id'=>608,
            'semt_ad'=>'Güzelçamlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>122,
            'id'=>609,
            'semt_ad'=>'Kuyucak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>122,
            'id'=>610,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>122,
            'id'=>611,
            'semt_ad'=>'Horsunlu(Kurşunlu)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>122,
            'id'=>612,
            'semt_ad'=>'Yamalak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>122,
            'id'=>613,
            'semt_ad'=>'Pamukören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>123,
            'id'=>614,
            'semt_ad'=>'Altıntaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>123,
            'id'=>615,
            'semt_ad'=>'Sümer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>123,
            'id'=>616,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>123,
            'id'=>617,
            'semt_ad'=>'İsabeyli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>124,
            'id'=>618,
            'semt_ad'=>'Söke'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>124,
            'id'=>619,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>124,
            'id'=>620,
            'semt_ad'=>'Sarıkemer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>124,
            'id'=>621,
            'semt_ad'=>'Sazlı Köy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>124,
            'id'=>622,
            'semt_ad'=>'Güllübahçe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>124,
            'id'=>623,
            'semt_ad'=>'Bağarası'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>124,
            'id'=>624,
            'semt_ad'=>'Savuca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>124,
            'id'=>625,
            'semt_ad'=>'Atburgazı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>124,
            'id'=>626,
            'semt_ad'=>'Yenidoğan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>125,
            'id'=>627,
            'semt_ad'=>'Sultanhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>125,
            'id'=>628,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>125,
            'id'=>629,
            'semt_ad'=>'Atça'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>114,
            'id'=>630,
            'semt_ad'=>'Yenihisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>114,
            'id'=>631,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>114,
            'id'=>632,
            'semt_ad'=>'Akbük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>114,
            'id'=>633,
            'semt_ad'=>'Akyeniköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>126,
            'id'=>634,
            'semt_ad'=>'Yenipazar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>126,
            'id'=>635,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>128,
            'id'=>636,
            'semt_ad'=>'Oruçgazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>128,
            'id'=>637,
            'semt_ad'=>'Sakarya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>128,
            'id'=>638,
            'semt_ad'=>'Gümüşçeşme'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>128,
            'id'=>639,
            'semt_ad'=>'Plevne'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>128,
            'id'=>640,
            'semt_ad'=>'Kızpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>128,
            'id'=>641,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>128,
            'id'=>642,
            'semt_ad'=>'Pamukçu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>128,
            'id'=>643,
            'semt_ad'=>'Küpeler(Ertuğrul)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>128,
            'id'=>644,
            'semt_ad'=>'Konakpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>128,
            'id'=>645,
            'semt_ad'=>'Şamlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>128,
            'id'=>646,
            'semt_ad'=>'Yeniköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>128,
            'id'=>647,
            'semt_ad'=>'Kocaavşar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>127,
            'id'=>648,
            'semt_ad'=>'Ayvalık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>127,
            'id'=>649,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>127,
            'id'=>650,
            'semt_ad'=>'Küçükköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>127,
            'id'=>651,
            'semt_ad'=>'Altınova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>127,
            'id'=>652,
            'semt_ad'=>'Sarımsaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>127,
            'id'=>653,
            'semt_ad'=>'Kazan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>127,
            'id'=>654,
            'semt_ad'=>'Alibey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>129,
            'id'=>655,
            'semt_ad'=>'Balya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>129,
            'id'=>656,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>130,
            'id'=>657,
            'semt_ad'=>'Bandırma'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>130,
            'id'=>658,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>130,
            'id'=>659,
            'semt_ad'=>'Karşıyaka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>130,
            'id'=>660,
            'semt_ad'=>'Aksakal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>130,
            'id'=>661,
            'semt_ad'=>'Edincik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>131,
            'id'=>662,
            'semt_ad'=>'Bigadiç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>131,
            'id'=>663,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>131,
            'id'=>664,
            'semt_ad'=>'İskele'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>131,
            'id'=>665,
            'semt_ad'=>'Çağış'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>131,
            'id'=>666,
            'semt_ad'=>'Yağcılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>132,
            'id'=>667,
            'semt_ad'=>'Burhaniye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>132,
            'id'=>668,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>132,
            'id'=>669,
            'semt_ad'=>'Pelitköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>133,
            'id'=>670,
            'semt_ad'=>'Dursunbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>133,
            'id'=>671,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>134,
            'id'=>672,
            'semt_ad'=>'Edremit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>134,
            'id'=>673,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>134,
            'id'=>674,
            'semt_ad'=>'Akçay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>134,
            'id'=>675,
            'semt_ad'=>'Altınoluk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>135,
            'id'=>676,
            'semt_ad'=>'Erdek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>135,
            'id'=>677,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>135,
            'id'=>678,
            'semt_ad'=>'Ocaklar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>136,
            'id'=>679,
            'semt_ad'=>'Gömeç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>136,
            'id'=>680,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>137,
            'id'=>681,
            'semt_ad'=>'Gönen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>137,
            'id'=>682,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>137,
            'id'=>683,
            'semt_ad'=>'Buğdaylı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>137,
            'id'=>684,
            'semt_ad'=>'Sarıköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>137,
            'id'=>685,
            'semt_ad'=>'Tütüncü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>138,
            'id'=>686,
            'semt_ad'=>'Havran'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>138,
            'id'=>687,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>138,
            'id'=>688,
            'semt_ad'=>'Büyükdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>139,
            'id'=>689,
            'semt_ad'=>'İvrindi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>139,
            'id'=>690,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>139,
            'id'=>691,
            'semt_ad'=>'Gökçeyazı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>139,
            'id'=>692,
            'semt_ad'=>'Kayapa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>139,
            'id'=>693,
            'semt_ad'=>'Korucu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>139,
            'id'=>694,
            'semt_ad'=>'Büyükyenice'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>140,
            'id'=>695,
            'semt_ad'=>'Kepsut'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>140,
            'id'=>696,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>140,
            'id'=>697,
            'semt_ad'=>'Durak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>141,
            'id'=>698,
            'semt_ad'=>'Manyas'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>141,
            'id'=>699,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>141,
            'id'=>700,
            'semt_ad'=>'Salur'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>142,
            'id'=>701,
            'semt_ad'=>'Marmara'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>142,
            'id'=>702,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>142,
            'id'=>703,
            'semt_ad'=>'Avşa(Türkeli)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>142,
            'id'=>704,
            'semt_ad'=>'Saraylar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>143,
            'id'=>705,
            'semt_ad'=>'Savaştepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>143,
            'id'=>706,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>143,
            'id'=>707,
            'semt_ad'=>'Sarıbeyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>144,
            'id'=>708,
            'semt_ad'=>'Sındırgı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>144,
            'id'=>709,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>144,
            'id'=>710,
            'semt_ad'=>'Yüreğil'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>145,
            'id'=>711,
            'semt_ad'=>'Susurluk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>145,
            'id'=>712,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>145,
            'id'=>713,
            'semt_ad'=>'Karapürçek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>145,
            'id'=>714,
            'semt_ad'=>'Göbel'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>146,
            'id'=>715,
            'semt_ad'=>'Bilecik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>146,
            'id'=>716,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>146,
            'id'=>717,
            'semt_ad'=>'Bayırköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>146,
            'id'=>718,
            'semt_ad'=>'Vezirhan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>146,
            'id'=>719,
            'semt_ad'=>'Küplü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>146,
            'id'=>720,
            'semt_ad'=>'İlyasbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>147,
            'id'=>721,
            'semt_ad'=>'Bozüyük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>147,
            'id'=>722,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>147,
            'id'=>723,
            'semt_ad'=>'Dodurga'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>148,
            'id'=>724,
            'semt_ad'=>'Gölpazarı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>148,
            'id'=>725,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>149,
            'id'=>726,
            'semt_ad'=>'İnhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>149,
            'id'=>727,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>150,
            'id'=>728,
            'semt_ad'=>'Osmaneli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>150,
            'id'=>729,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>151,
            'id'=>730,
            'semt_ad'=>'Pazaryeri'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>151,
            'id'=>731,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>152,
            'id'=>732,
            'semt_ad'=>'Söğüt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>152,
            'id'=>733,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>152,
            'id'=>734,
            'semt_ad'=>'Çaltı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>153,
            'id'=>735,
            'semt_ad'=>'Yenipazar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>153,
            'id'=>736,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>155,
            'id'=>737,
            'semt_ad'=>'Bingöl'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>155,
            'id'=>738,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>155,
            'id'=>739,
            'semt_ad'=>'Sancak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>155,
            'id'=>740,
            'semt_ad'=>'Ilıcalar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>155,
            'id'=>741,
            'semt_ad'=>'Yamaç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>154,
            'id'=>742,
            'semt_ad'=>'Adaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>154,
            'id'=>743,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>156,
            'id'=>744,
            'semt_ad'=>'Genç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>156,
            'id'=>745,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>156,
            'id'=>746,
            'semt_ad'=>'Yayla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>156,
            'id'=>747,
            'semt_ad'=>'Servi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>157,
            'id'=>748,
            'semt_ad'=>'Karlıova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>157,
            'id'=>749,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>158,
            'id'=>750,
            'semt_ad'=>'Kiğı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>158,
            'id'=>751,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>159,
            'id'=>752,
            'semt_ad'=>'Solhan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>159,
            'id'=>753,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>159,
            'id'=>754,
            'semt_ad'=>'Arakonak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>160,
            'id'=>755,
            'semt_ad'=>'Yayladere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>160,
            'id'=>756,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>161,
            'id'=>757,
            'semt_ad'=>'Yedisu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>161,
            'id'=>758,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>164,
            'id'=>759,
            'semt_ad'=>'Bitlis'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>164,
            'id'=>760,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>164,
            'id'=>761,
            'semt_ad'=>'Bölükyazı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>164,
            'id'=>762,
            'semt_ad'=>'Yolalan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>164,
            'id'=>763,
            'semt_ad'=>'Narlıdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>162,
            'id'=>764,
            'semt_ad'=>'Adilcevaz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>162,
            'id'=>765,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>162,
            'id'=>766,
            'semt_ad'=>'Aydınlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>163,
            'id'=>767,
            'semt_ad'=>'Ahlat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>163,
            'id'=>768,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>163,
            'id'=>769,
            'semt_ad'=>'Ovakışla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>165,
            'id'=>770,
            'semt_ad'=>'Güroymak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>165,
            'id'=>771,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>165,
            'id'=>772,
            'semt_ad'=>'Gölbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>165,
            'id'=>773,
            'semt_ad'=>'Günkırı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>166,
            'id'=>774,
            'semt_ad'=>'Hizan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>166,
            'id'=>775,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>166,
            'id'=>776,
            'semt_ad'=>'Akşar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>166,
            'id'=>777,
            'semt_ad'=>'Sağınlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>167,
            'id'=>778,
            'semt_ad'=>'Mutki'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>167,
            'id'=>779,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>167,
            'id'=>780,
            'semt_ad'=>'Geyikpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>167,
            'id'=>781,
            'semt_ad'=>'Kavakbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>167,
            'id'=>782,
            'semt_ad'=>'Meydan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>167,
            'id'=>783,
            'semt_ad'=>'Koyunlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>168,
            'id'=>784,
            'semt_ad'=>'Tatvan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>168,
            'id'=>785,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>168,
            'id'=>786,
            'semt_ad'=>'Küçüksu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>168,
            'id'=>787,
            'semt_ad'=>'Yelkenli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>169,
            'id'=>788,
            'semt_ad'=>'Karamanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>169,
            'id'=>789,
            'semt_ad'=>'İhsaniye/Gölyüzü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>169,
            'id'=>790,
            'semt_ad'=>'Aşağısoku/Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>169,
            'id'=>791,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>169,
            'id'=>792,
            'semt_ad'=>'Karacasu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>170,
            'id'=>793,
            'semt_ad'=>'Dörtdivan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>170,
            'id'=>794,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>171,
            'id'=>795,
            'semt_ad'=>'Gerede'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>171,
            'id'=>796,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>172,
            'id'=>797,
            'semt_ad'=>'Göynük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>172,
            'id'=>798,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>173,
            'id'=>799,
            'semt_ad'=>'Kıbrıscık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>174,
            'id'=>800,
            'semt_ad'=>'Mengen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>174,
            'id'=>801,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>174,
            'id'=>802,
            'semt_ad'=>'Gökçesu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>175,
            'id'=>803,
            'semt_ad'=>'Mudurnu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>175,
            'id'=>804,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>176,
            'id'=>805,
            'semt_ad'=>'Seben'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>176,
            'id'=>806,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>177,
            'id'=>807,
            'semt_ad'=>'Yeniçağa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>177,
            'id'=>808,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>181,
            'id'=>809,
            'semt_ad'=>'Yenice'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>181,
            'id'=>810,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>181,
            'id'=>811,
            'semt_ad'=>'Bahçelievler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>181,
            'id'=>812,
            'semt_ad'=>'Çeşmedamı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>181,
            'id'=>813,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>178,
            'id'=>814,
            'semt_ad'=>'Ağlasun'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>178,
            'id'=>815,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>179,
            'id'=>816,
            'semt_ad'=>'Altınyayla(Dirmil)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>179,
            'id'=>817,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>180,
            'id'=>818,
            'semt_ad'=>'Bucak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>180,
            'id'=>819,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>180,
            'id'=>820,
            'semt_ad'=>'Kocaaliler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>182,
            'id'=>821,
            'semt_ad'=>'Çavdır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>182,
            'id'=>822,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>182,
            'id'=>823,
            'semt_ad'=>'Söğüt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>183,
            'id'=>824,
            'semt_ad'=>'Çeltikçi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>183,
            'id'=>825,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>183,
            'id'=>826,
            'semt_ad'=>'Bağsaray'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>184,
            'id'=>827,
            'semt_ad'=>'Gölhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>184,
            'id'=>828,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>185,
            'id'=>829,
            'semt_ad'=>'Karamanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>185,
            'id'=>830,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>186,
            'id'=>831,
            'semt_ad'=>'Kemer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>186,
            'id'=>832,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>187,
            'id'=>833,
            'semt_ad'=>'Tefenni'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>187,
            'id'=>834,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>188,
            'id'=>835,
            'semt_ad'=>'Yeşilova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>188,
            'id'=>836,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>188,
            'id'=>837,
            'semt_ad'=>'Güney'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>200,
            'id'=>838,
            'semt_ad'=>'Beşevler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>200,
            'id'=>839,
            'semt_ad'=>'İhsaniye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>200,
            'id'=>840,
            'semt_ad'=>'Fethiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>200,
            'id'=>841,
            'semt_ad'=>'Ertuğrul'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>200,
            'id'=>842,
            'semt_ad'=>'Görükle'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>200,
            'id'=>843,
            'semt_ad'=>'Çalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>200,
            'id'=>844,
            'semt_ad'=>'Kayapa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>200,
            'id'=>845,
            'semt_ad'=>'Akçalar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>200,
            'id'=>846,
            'semt_ad'=>'Hasanağa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>200,
            'id'=>847,
            'semt_ad'=>'Gölyazı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>200,
            'id'=>848,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>203,
            'id'=>849,
            'semt_ad'=>'Ulucami'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>203,
            'id'=>850,
            'semt_ad'=>'Maksem'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>203,
            'id'=>851,
            'semt_ad'=>'Altıparmak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>203,
            'id'=>852,
            'semt_ad'=>'Çekirge'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>203,
            'id'=>853,
            'semt_ad'=>'Tayakadın'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>203,
            'id'=>854,
            'semt_ad'=>'Çirişhane'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>203,
            'id'=>855,
            'semt_ad'=>'Soğanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>203,
            'id'=>856,
            'semt_ad'=>'Kovukçınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>203,
            'id'=>857,
            'semt_ad'=>'Bağlarbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>203,
            'id'=>858,
            'semt_ad'=>'Demirtaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>203,
            'id'=>859,
            'semt_ad'=>'Ovaakça'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>203,
            'id'=>860,
            'semt_ad'=>'Emek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>203,
            'id'=>861,
            'semt_ad'=>'Kirazlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>203,
            'id'=>862,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>205,
            'id'=>863,
            'semt_ad'=>'Duacınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>205,
            'id'=>864,
            'semt_ad'=>'Arabayatağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>205,
            'id'=>865,
            'semt_ad'=>'Hacıvat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>205,
            'id'=>866,
            'semt_ad'=>'Esenevler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>205,
            'id'=>867,
            'semt_ad'=>'Ertuğrulgazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>205,
            'id'=>868,
            'semt_ad'=>'Eğitim'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>205,
            'id'=>869,
            'semt_ad'=>'Yeşilyayla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>205,
            'id'=>870,
            'semt_ad'=>'Yıldırım'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>205,
            'id'=>871,
            'semt_ad'=>'Emirsultan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>205,
            'id'=>872,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>189,
            'id'=>873,
            'semt_ad'=>'Büyükorhan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>189,
            'id'=>874,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>190,
            'id'=>875,
            'semt_ad'=>'Gemlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>190,
            'id'=>876,
            'semt_ad'=>'Küçükkumla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>190,
            'id'=>877,
            'semt_ad'=>'Umurbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>190,
            'id'=>878,
            'semt_ad'=>'Kurşunlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>190,
            'id'=>879,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>191,
            'id'=>880,
            'semt_ad'=>'Gürsu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>191,
            'id'=>881,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>192,
            'id'=>882,
            'semt_ad'=>'Harmancık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>192,
            'id'=>883,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>193,
            'id'=>884,
            'semt_ad'=>'İnegöl'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>193,
            'id'=>885,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>193,
            'id'=>886,
            'semt_ad'=>'Cerrah'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>193,
            'id'=>887,
            'semt_ad'=>'Kurşunlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>193,
            'id'=>888,
            'semt_ad'=>'Yenice'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>193,
            'id'=>889,
            'semt_ad'=>'Tahtaköprü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>193,
            'id'=>890,
            'semt_ad'=>'Alanyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>194,
            'id'=>891,
            'semt_ad'=>'İznik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>194,
            'id'=>892,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>194,
            'id'=>893,
            'semt_ad'=>'Boyalıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>194,
            'id'=>894,
            'semt_ad'=>'Elbeyli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>195,
            'id'=>895,
            'semt_ad'=>'Karacabey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>195,
            'id'=>896,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>195,
            'id'=>897,
            'semt_ad'=>'Yeniköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>196,
            'id'=>898,
            'semt_ad'=>'Keles'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>196,
            'id'=>899,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>197,
            'id'=>900,
            'semt_ad'=>'Kestel'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>197,
            'id'=>901,
            'semt_ad'=>'Barakfaki'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>197,
            'id'=>902,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>198,
            'id'=>903,
            'semt_ad'=>'Mudanya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>198,
            'id'=>904,
            'semt_ad'=>'Güzelyalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>198,
            'id'=>905,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>198,
            'id'=>906,
            'semt_ad'=>'Zeytinbağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>199,
            'id'=>907,
            'semt_ad'=>'Mustafakemalpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>199,
            'id'=>908,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>199,
            'id'=>909,
            'semt_ad'=>'Tatkavaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>199,
            'id'=>910,
            'semt_ad'=>'Tepecik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>199,
            'id'=>911,
            'semt_ad'=>'Çaltılıbölük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>199,
            'id'=>912,
            'semt_ad'=>'Devecikonağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>199,
            'id'=>913,
            'semt_ad'=>'Söğütalan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>199,
            'id'=>914,
            'semt_ad'=>'Çeltikçi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>199,
            'id'=>915,
            'semt_ad'=>'Yeşilova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>199,
            'id'=>916,
            'semt_ad'=>'Yalıntaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>201,
            'id'=>917,
            'semt_ad'=>'Orhaneli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>201,
            'id'=>918,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>201,
            'id'=>919,
            'semt_ad'=>'Göynükbelen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>201,
            'id'=>920,
            'semt_ad'=>'Karıncalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>202,
            'id'=>921,
            'semt_ad'=>'Orhangazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>202,
            'id'=>922,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>202,
            'id'=>923,
            'semt_ad'=>'Yeniköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>202,
            'id'=>924,
            'semt_ad'=>'Çakırlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>204,
            'id'=>925,
            'semt_ad'=>'Yenişehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>204,
            'id'=>926,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>211,
            'id'=>927,
            'semt_ad'=>'Barbaros'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>211,
            'id'=>928,
            'semt_ad'=>'Cevatpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>211,
            'id'=>929,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>211,
            'id'=>930,
            'semt_ad'=>'İntepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>211,
            'id'=>931,
            'semt_ad'=>'Kirazlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>211,
            'id'=>932,
            'semt_ad'=>'Kepez'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>206,
            'id'=>933,
            'semt_ad'=>'Ayvacık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>206,
            'id'=>934,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>206,
            'id'=>935,
            'semt_ad'=>'Küçükkuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>207,
            'id'=>936,
            'semt_ad'=>'Bayramiç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>207,
            'id'=>937,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>207,
            'id'=>938,
            'semt_ad'=>'Evciler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>207,
            'id'=>939,
            'semt_ad'=>'Yiğitler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>208,
            'id'=>940,
            'semt_ad'=>'Biga'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>208,
            'id'=>941,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>208,
            'id'=>942,
            'semt_ad'=>'Bakacak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>208,
            'id'=>943,
            'semt_ad'=>'Gümüşçay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>208,
            'id'=>944,
            'semt_ad'=>'Gündoğdu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>208,
            'id'=>945,
            'semt_ad'=>'Karabiga'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>208,
            'id'=>946,
            'semt_ad'=>'Sinekçi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>209,
            'id'=>947,
            'semt_ad'=>'Bozcaada'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>210,
            'id'=>948,
            'semt_ad'=>'Çan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>210,
            'id'=>949,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>210,
            'id'=>950,
            'semt_ad'=>'Terzialan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>212,
            'id'=>951,
            'semt_ad'=>'Eceabat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>212,
            'id'=>952,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>213,
            'id'=>953,
            'semt_ad'=>'Ezine'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>213,
            'id'=>954,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>213,
            'id'=>955,
            'semt_ad'=>'Geyikli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>213,
            'id'=>956,
            'semt_ad'=>'Mahmudiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>214,
            'id'=>957,
            'semt_ad'=>'Gelibolu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>214,
            'id'=>958,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>214,
            'id'=>959,
            'semt_ad'=>'Bolayır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>214,
            'id'=>960,
            'semt_ad'=>'Evreşe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>215,
            'id'=>961,
            'semt_ad'=>'Gökçeada(İmroz)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>215,
            'id'=>962,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>216,
            'id'=>963,
            'semt_ad'=>'Lapseki'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>216,
            'id'=>964,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>216,
            'id'=>965,
            'semt_ad'=>'Çardak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>216,
            'id'=>966,
            'semt_ad'=>'Umurbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>217,
            'id'=>967,
            'semt_ad'=>'Yenice'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>217,
            'id'=>968,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>217,
            'id'=>969,
            'semt_ad'=>'Hamdibey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>217,
            'id'=>970,
            'semt_ad'=>'Kalkım'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>220,
            'id'=>971,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>220,
            'id'=>972,
            'semt_ad'=>'Taşmescit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>220,
            'id'=>973,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>218,
            'id'=>974,
            'semt_ad'=>'Atkaracalar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>218,
            'id'=>975,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>219,
            'id'=>976,
            'semt_ad'=>'Bayramören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>219,
            'id'=>977,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>221,
            'id'=>978,
            'semt_ad'=>'Çerkeş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>221,
            'id'=>979,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>222,
            'id'=>980,
            'semt_ad'=>'Eldivan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>222,
            'id'=>981,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>223,
            'id'=>982,
            'semt_ad'=>'Ilgaz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>223,
            'id'=>983,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>223,
            'id'=>984,
            'semt_ad'=>'Belören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>224,
            'id'=>985,
            'semt_ad'=>'Kızılırmak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>224,
            'id'=>986,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>225,
            'id'=>987,
            'semt_ad'=>'Korgun'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>225,
            'id'=>988,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>226,
            'id'=>989,
            'semt_ad'=>'Kurşunlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>226,
            'id'=>990,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>227,
            'id'=>991,
            'semt_ad'=>'Orta'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>227,
            'id'=>992,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>228,
            'id'=>993,
            'semt_ad'=>'Şabanözü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>228,
            'id'=>994,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>229,
            'id'=>995,
            'semt_ad'=>'Yapraklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>229,
            'id'=>996,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>233,
            'id'=>997,
            'semt_ad'=>'Karakeçili'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>233,
            'id'=>998,
            'semt_ad'=>'Ulukavak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>233,
            'id'=>999,
            'semt_ad'=>'Gülabibey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>233,
            'id'=>1000,
            'semt_ad'=>'Yeniyol'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>233,
            'id'=>1001,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>230,
            'id'=>1002,
            'semt_ad'=>'Alaca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>230,
            'id'=>1003,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>231,
            'id'=>1004,
            'semt_ad'=>'Bayat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>231,
            'id'=>1005,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>232,
            'id'=>1006,
            'semt_ad'=>'Boğazkale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>232,
            'id'=>1007,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>234,
            'id'=>1008,
            'semt_ad'=>'Dodurga'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>234,
            'id'=>1009,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>235,
            'id'=>1010,
            'semt_ad'=>'İskilip'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>235,
            'id'=>1011,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>236,
            'id'=>1012,
            'semt_ad'=>'Kargı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>236,
            'id'=>1013,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>237,
            'id'=>1014,
            'semt_ad'=>'Laçin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>237,
            'id'=>1015,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>238,
            'id'=>1016,
            'semt_ad'=>'Mecitözü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>238,
            'id'=>1017,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>239,
            'id'=>1018,
            'semt_ad'=>'Oğuzlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>239,
            'id'=>1019,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>240,
            'id'=>1020,
            'semt_ad'=>'Ortaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>240,
            'id'=>1021,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>240,
            'id'=>1022,
            'semt_ad'=>'Aştavul'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>240,
            'id'=>1023,
            'semt_ad'=>'Karahacip'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>241,
            'id'=>1024,
            'semt_ad'=>'Osmancık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>241,
            'id'=>1025,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>242,
            'id'=>1026,
            'semt_ad'=>'Sungurlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>242,
            'id'=>1027,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>242,
            'id'=>1028,
            'semt_ad'=>'Arifegazili'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>243,
            'id'=>1029,
            'semt_ad'=>'Uğurludağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>243,
            'id'=>1030,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1031,
            'semt_ad'=>'Kiremitçi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1032,
            'semt_ad'=>'Kuyupınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1033,
            'semt_ad'=>'Gürcan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1034,
            'semt_ad'=>'İlbadı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1035,
            'semt_ad'=>'Bakırlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1036,
            'semt_ad'=>'Sümer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1037,
            'semt_ad'=>'Aktepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1038,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1039,
            'semt_ad'=>'Başkarcı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1040,
            'semt_ad'=>'Gözler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1041,
            'semt_ad'=>'Gümüşler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1042,
            'semt_ad'=>'Irlıganlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1043,
            'semt_ad'=>'Uzunpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1044,
            'semt_ad'=>'Kınıklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1045,
            'semt_ad'=>'Bağbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1046,
            'semt_ad'=>'Gökpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1047,
            'semt_ad'=>'Hallaçlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1048,
            'semt_ad'=>'Kayhan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1049,
            'semt_ad'=>'Servergazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1050,
            'semt_ad'=>'Üçler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1051,
            'semt_ad'=>'Akkale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1052,
            'semt_ad'=>'Güveçlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1053,
            'semt_ad'=>'Korucuk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1054,
            'semt_ad'=>'Pınarkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1055,
            'semt_ad'=>'Bereketli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1056,
            'semt_ad'=>'Pamukkale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>256,
            'id'=>1057,
            'semt_ad'=>'Karahayit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>244,
            'id'=>1058,
            'semt_ad'=>'Acıpayam'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>244,
            'id'=>1059,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>244,
            'id'=>1060,
            'semt_ad'=>'Akalan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>244,
            'id'=>1061,
            'semt_ad'=>'Alaattin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>244,
            'id'=>1062,
            'semt_ad'=>'Dedebağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>244,
            'id'=>1063,
            'semt_ad'=>'Yazır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>244,
            'id'=>1064,
            'semt_ad'=>'Yeşilyuva'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>245,
            'id'=>1065,
            'semt_ad'=>'Akköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>245,
            'id'=>1066,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>246,
            'id'=>1067,
            'semt_ad'=>'Babadağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>246,
            'id'=>1068,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>247,
            'id'=>1069,
            'semt_ad'=>'Baklan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>247,
            'id'=>1070,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>248,
            'id'=>1071,
            'semt_ad'=>'Bekilli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>248,
            'id'=>1072,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>249,
            'id'=>1073,
            'semt_ad'=>'Beyağaç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>249,
            'id'=>1074,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>250,
            'id'=>1075,
            'semt_ad'=>'Bozkurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>250,
            'id'=>1076,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>250,
            'id'=>1077,
            'semt_ad'=>'İnceler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>251,
            'id'=>1078,
            'semt_ad'=>'Buldan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>251,
            'id'=>1079,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>251,
            'id'=>1080,
            'semt_ad'=>'Yenicekent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>252,
            'id'=>1081,
            'semt_ad'=>'Çal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>252,
            'id'=>1082,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>252,
            'id'=>1083,
            'semt_ad'=>'Akkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>252,
            'id'=>1084,
            'semt_ad'=>'Süller'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>253,
            'id'=>1085,
            'semt_ad'=>'Çameli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>253,
            'id'=>1086,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>254,
            'id'=>1087,
            'semt_ad'=>'Çardak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>254,
            'id'=>1088,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>255,
            'id'=>1089,
            'semt_ad'=>'Çivril'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>255,
            'id'=>1090,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>255,
            'id'=>1091,
            'semt_ad'=>'Çıtak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>255,
            'id'=>1092,
            'semt_ad'=>'Emirhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>255,
            'id'=>1093,
            'semt_ad'=>'Gürpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>255,
            'id'=>1094,
            'semt_ad'=>'Irgıllı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>255,
            'id'=>1095,
            'semt_ad'=>'Kıralan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>255,
            'id'=>1096,
            'semt_ad'=>'Özdemirci'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>255,
            'id'=>1097,
            'semt_ad'=>'Gümüşsu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>255,
            'id'=>1098,
            'semt_ad'=>'Işıklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>255,
            'id'=>1099,
            'semt_ad'=>'Kızılcasöğüt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>257,
            'id'=>1100,
            'semt_ad'=>'Güney'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>257,
            'id'=>1101,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>258,
            'id'=>1102,
            'semt_ad'=>'Honaz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>258,
            'id'=>1103,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>258,
            'id'=>1104,
            'semt_ad'=>'Kaklık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>259,
            'id'=>1105,
            'semt_ad'=>'Kale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>259,
            'id'=>1106,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>260,
            'id'=>1107,
            'semt_ad'=>'Sarayköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>260,
            'id'=>1108,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>261,
            'id'=>1109,
            'semt_ad'=>'Serinhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>261,
            'id'=>1110,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>261,
            'id'=>1111,
            'semt_ad'=>'Yatağan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>262,
            'id'=>1112,
            'semt_ad'=>'Tavas'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>262,
            'id'=>1113,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>262,
            'id'=>1114,
            'semt_ad'=>'Nikfer(Büyükkonak)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>262,
            'id'=>1115,
            'semt_ad'=>'Kızılcabölük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>262,
            'id'=>1116,
            'semt_ad'=>'Karahisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>278,
            'id'=>1117,
            'semt_ad'=>'Balıkçılarbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>278,
            'id'=>1118,
            'semt_ad'=>'Kıtılbır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>278,
            'id'=>1119,
            'semt_ad'=>'Suriçi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>278,
            'id'=>1120,
            'semt_ad'=>'Bağıvar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>278,
            'id'=>1121,
            'semt_ad'=>'Çarıklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>278,
            'id'=>1122,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>278,
            'id'=>1123,
            'semt_ad'=>'Özekli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>278,
            'id'=>1124,
            'semt_ad'=>'Mermer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>263,
            'id'=>1125,
            'semt_ad'=>'Alipınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>263,
            'id'=>1126,
            'semt_ad'=>'Selahattineyyubi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>263,
            'id'=>1127,
            'semt_ad'=>'Körhat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>263,
            'id'=>1128,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>279,
            'id'=>1129,
            'semt_ad'=>'Şehitlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>279,
            'id'=>1130,
            'semt_ad'=>'Yenişehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>279,
            'id'=>1131,
            'semt_ad'=>'Cumhuriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>279,
            'id'=>1132,
            'semt_ad'=>'Dicle'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>279,
            'id'=>1133,
            'semt_ad'=>'Piriçlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>279,
            'id'=>1134,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>273,
            'id'=>1135,
            'semt_ad'=>'Kayapınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>273,
            'id'=>1136,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>273,
            'id'=>1137,
            'semt_ad'=>'Yolboyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>264,
            'id'=>1138,
            'semt_ad'=>'Bismil'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>264,
            'id'=>1139,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>264,
            'id'=>1140,
            'semt_ad'=>'Tepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>264,
            'id'=>1141,
            'semt_ad'=>'Yukarısalat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>264,
            'id'=>1142,
            'semt_ad'=>'Ambar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>265,
            'id'=>1143,
            'semt_ad'=>'Çermik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>265,
            'id'=>1144,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>265,
            'id'=>1145,
            'semt_ad'=>'Başarı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>266,
            'id'=>1146,
            'semt_ad'=>'Çınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>266,
            'id'=>1147,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>266,
            'id'=>1148,
            'semt_ad'=>'Ovabağ(Kilvan)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>266,
            'id'=>1149,
            'semt_ad'=>'Alatosun'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>267,
            'id'=>1150,
            'semt_ad'=>'Çüngüş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>267,
            'id'=>1151,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>268,
            'id'=>1152,
            'semt_ad'=>'Dicle'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>268,
            'id'=>1153,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>268,
            'id'=>1154,
            'semt_ad'=>'Kaygısız'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>269,
            'id'=>1155,
            'semt_ad'=>'Eğil'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>269,
            'id'=>1156,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>270,
            'id'=>1157,
            'semt_ad'=>'Ergani'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>270,
            'id'=>1158,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>270,
            'id'=>1159,
            'semt_ad'=>'Ahmetli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>270,
            'id'=>1160,
            'semt_ad'=>'Şölen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>271,
            'id'=>1161,
            'semt_ad'=>'Hani'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>271,
            'id'=>1162,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>271,
            'id'=>1163,
            'semt_ad'=>'Gürbüz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>271,
            'id'=>1164,
            'semt_ad'=>'Kuyular'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>272,
            'id'=>1165,
            'semt_ad'=>'Hazro'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>272,
            'id'=>1166,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>274,
            'id'=>1167,
            'semt_ad'=>'Kocaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>274,
            'id'=>1168,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>275,
            'id'=>1169,
            'semt_ad'=>'Kulp'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>275,
            'id'=>1170,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>275,
            'id'=>1171,
            'semt_ad'=>'Aygün(Akçaşır)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>275,
            'id'=>1172,
            'semt_ad'=>'Hamzalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>276,
            'id'=>1173,
            'semt_ad'=>'Lice'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>276,
            'id'=>1174,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>276,
            'id'=>1175,
            'semt_ad'=>'Kayacık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>277,
            'id'=>1176,
            'semt_ad'=>'Silvan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>277,
            'id'=>1177,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>277,
            'id'=>1178,
            'semt_ad'=>'Bağdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>277,
            'id'=>1179,
            'semt_ad'=>'Çatakköprü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>280,
            'id'=>1180,
            'semt_ad'=>'Londraasfaltı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>280,
            'id'=>1181,
            'semt_ad'=>'Üniversite'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>280,
            'id'=>1182,
            'semt_ad'=>'Karaağaç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>280,
            'id'=>1183,
            'semt_ad'=>'Balıkpazarı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>280,
            'id'=>1184,
            'semt_ad'=>'Kapıkule'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>280,
            'id'=>1185,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>280,
            'id'=>1186,
            'semt_ad'=>'Karakasım'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>280,
            'id'=>1187,
            'semt_ad'=>'Sırpsındığı(Sarayakpınar)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>281,
            'id'=>1188,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>281,
            'id'=>1189,
            'semt_ad'=>'Altınkum'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>281,
            'id'=>1190,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>282,
            'id'=>1191,
            'semt_ad'=>'Havsa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>282,
            'id'=>1192,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>282,
            'id'=>1193,
            'semt_ad'=>'Hasköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>283,
            'id'=>1194,
            'semt_ad'=>'İpsala'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>283,
            'id'=>1195,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>283,
            'id'=>1196,
            'semt_ad'=>'Yenikarpuzlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>283,
            'id'=>1197,
            'semt_ad'=>'Esetçe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>284,
            'id'=>1198,
            'semt_ad'=>'Kalebayırı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>284,
            'id'=>1199,
            'semt_ad'=>'Yenicami'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>284,
            'id'=>1200,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>284,
            'id'=>1201,
            'semt_ad'=>'Beğendik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>285,
            'id'=>1202,
            'semt_ad'=>'Lalapaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>285,
            'id'=>1203,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>286,
            'id'=>1204,
            'semt_ad'=>'Meriç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>286,
            'id'=>1205,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>286,
            'id'=>1206,
            'semt_ad'=>'Küplü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>286,
            'id'=>1207,
            'semt_ad'=>'Subaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>287,
            'id'=>1208,
            'semt_ad'=>'Süloğlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>287,
            'id'=>1209,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>288,
            'id'=>1210,
            'semt_ad'=>'Şehsuvarbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>288,
            'id'=>1211,
            'semt_ad'=>'Aşçıoğlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>288,
            'id'=>1212,
            'semt_ad'=>'Gar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>288,
            'id'=>1213,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>288,
            'id'=>1214,
            'semt_ad'=>'Hamidiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>288,
            'id'=>1215,
            'semt_ad'=>'Kırcasalih'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>293,
            'id'=>1216,
            'semt_ad'=>'Sürsürü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>293,
            'id'=>1217,
            'semt_ad'=>'Aksaray'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>293,
            'id'=>1218,
            'semt_ad'=>'Nailbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>293,
            'id'=>1219,
            'semt_ad'=>'İzzetpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>293,
            'id'=>1220,
            'semt_ad'=>'1800 Evler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>293,
            'id'=>1221,
            'semt_ad'=>'Doğukent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>293,
            'id'=>1222,
            'semt_ad'=>'Mustafapaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>293,
            'id'=>1223,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>293,
            'id'=>1224,
            'semt_ad'=>'Akçakiraz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>293,
            'id'=>1225,
            'semt_ad'=>'Mollakendi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>293,
            'id'=>1226,
            'semt_ad'=>'Yazıkonak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>293,
            'id'=>1227,
            'semt_ad'=>'Yurtbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>289,
            'id'=>1228,
            'semt_ad'=>'Ağın'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>289,
            'id'=>1229,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>290,
            'id'=>1230,
            'semt_ad'=>'Alacakaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>290,
            'id'=>1231,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>291,
            'id'=>1232,
            'semt_ad'=>'Arıcak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>291,
            'id'=>1233,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>291,
            'id'=>1234,
            'semt_ad'=>'Erimli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>291,
            'id'=>1235,
            'semt_ad'=>'Üçocak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>292,
            'id'=>1236,
            'semt_ad'=>'Baskil'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>292,
            'id'=>1237,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>294,
            'id'=>1238,
            'semt_ad'=>'Karakoçan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>294,
            'id'=>1239,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>294,
            'id'=>1240,
            'semt_ad'=>'Sarıcan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>295,
            'id'=>1241,
            'semt_ad'=>'Keban'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>295,
            'id'=>1242,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>296,
            'id'=>1243,
            'semt_ad'=>'Kovancılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>296,
            'id'=>1244,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>297,
            'id'=>1245,
            'semt_ad'=>'Maden'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>297,
            'id'=>1246,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>297,
            'id'=>1247,
            'semt_ad'=>'Gezin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>298,
            'id'=>1248,
            'semt_ad'=>'Palu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>298,
            'id'=>1249,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>298,
            'id'=>1250,
            'semt_ad'=>'Beyhan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>298,
            'id'=>1251,
            'semt_ad'=>'Baltaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>298,
            'id'=>1252,
            'semt_ad'=>'Gökdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>299,
            'id'=>1253,
            'semt_ad'=>'Sivrice'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>299,
            'id'=>1254,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1255,
            'semt_ad'=>'Başbağlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1256,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1257,
            'semt_ad'=>'Bahçelievler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1258,
            'semt_ad'=>'İnönü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1259,
            'semt_ad'=>'Halitpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1260,
            'semt_ad'=>'Akşemsettin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1261,
            'semt_ad'=>'İzzetpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1262,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1263,
            'semt_ad'=>'Çukurkuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1264,
            'semt_ad'=>'Çatalarmut'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1265,
            'semt_ad'=>'Geçit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1266,
            'semt_ad'=>'Ulalar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1267,
            'semt_ad'=>'Akyazı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1268,
            'semt_ad'=>'Demirkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1269,
            'semt_ad'=>'Kavakyolu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1270,
            'semt_ad'=>'Mollaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1271,
            'semt_ad'=>'Yalnızbağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>301,
            'id'=>1272,
            'semt_ad'=>'Yoğurtlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>300,
            'id'=>1273,
            'semt_ad'=>'Çayırlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>300,
            'id'=>1274,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>300,
            'id'=>1275,
            'semt_ad'=>'Başköy(Yaylakent)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>302,
            'id'=>1276,
            'semt_ad'=>'Ilıç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>302,
            'id'=>1277,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>302,
            'id'=>1278,
            'semt_ad'=>'Armutlu(Büyükarmutlu)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>302,
            'id'=>1279,
            'semt_ad'=>'Kuruçay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>303,
            'id'=>1280,
            'semt_ad'=>'Kemah'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>303,
            'id'=>1281,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>303,
            'id'=>1282,
            'semt_ad'=>'Alpköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>303,
            'id'=>1283,
            'semt_ad'=>'Bozoğlak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>303,
            'id'=>1284,
            'semt_ad'=>'Doğanbeyli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>303,
            'id'=>1285,
            'semt_ad'=>'Oğuz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>304,
            'id'=>1286,
            'semt_ad'=>'Kemaliye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>304,
            'id'=>1287,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>304,
            'id'=>1288,
            'semt_ad'=>'Başpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>304,
            'id'=>1289,
            'semt_ad'=>'Dutluca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>305,
            'id'=>1290,
            'semt_ad'=>'Otlukbeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>305,
            'id'=>1291,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>306,
            'id'=>1292,
            'semt_ad'=>'Refahiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>306,
            'id'=>1293,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>306,
            'id'=>1294,
            'semt_ad'=>'Akarsu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>306,
            'id'=>1295,
            'semt_ad'=>'Cengerli(Doğandere)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>306,
            'id'=>1296,
            'semt_ad'=>'Çatalçam'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>306,
            'id'=>1297,
            'semt_ad'=>'Gümüşakar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>307,
            'id'=>1298,
            'semt_ad'=>'Tercan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>307,
            'id'=>1299,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>307,
            'id'=>1300,
            'semt_ad'=>'Çadırkaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>308,
            'id'=>1301,
            'semt_ad'=>'Üzümlü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>308,
            'id'=>1302,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>308,
            'id'=>1303,
            'semt_ad'=>'Tanyeli(Ocakbaşı)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>321,
            'id'=>1304,
            'semt_ad'=>'Yıldızkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>321,
            'id'=>1305,
            'semt_ad'=>'Yenişehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>321,
            'id'=>1306,
            'semt_ad'=>'Palandöken'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>321,
            'id'=>1307,
            'semt_ad'=>'Harput'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>321,
            'id'=>1308,
            'semt_ad'=>'Kazımkarabekir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>321,
            'id'=>1309,
            'semt_ad'=>'Mahallebaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>321,
            'id'=>1310,
            'semt_ad'=>'Aziziye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>321,
            'id'=>1311,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>321,
            'id'=>1312,
            'semt_ad'=>'Hastaneler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>321,
            'id'=>1313,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>328,
            'id'=>1314,
            'semt_ad'=>'Terminal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>328,
            'id'=>1315,
            'semt_ad'=>'Lalapaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>328,
            'id'=>1316,
            'semt_ad'=>'Mumcu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>328,
            'id'=>1317,
            'semt_ad'=>'Atatürküniversitesi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>328,
            'id'=>1318,
            'semt_ad'=>'İstasyon'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>328,
            'id'=>1319,
            'semt_ad'=>'Kadana'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>328,
            'id'=>1320,
            'semt_ad'=>'Çayırtepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>328,
            'id'=>1321,
            'semt_ad'=>'Mecidiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>328,
            'id'=>1322,
            'semt_ad'=>'Dadaşköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>328,
            'id'=>1323,
            'semt_ad'=>'Dumlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>328,
            'id'=>1324,
            'semt_ad'=>'Cedit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>328,
            'id'=>1325,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>310,
            'id'=>1326,
            'semt_ad'=>'Ilıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>310,
            'id'=>1327,
            'semt_ad'=>'Dadaşkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>310,
            'id'=>1328,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>309,
            'id'=>1329,
            'semt_ad'=>'Aşkale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>309,
            'id'=>1330,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>311,
            'id'=>1331,
            'semt_ad'=>'Çat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>311,
            'id'=>1332,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>312,
            'id'=>1333,
            'semt_ad'=>'Hınıs'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>312,
            'id'=>1334,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>313,
            'id'=>1335,
            'semt_ad'=>'Horasan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>313,
            'id'=>1336,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>314,
            'id'=>1337,
            'semt_ad'=>'İspir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>314,
            'id'=>1338,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>315,
            'id'=>1339,
            'semt_ad'=>'Karaçoban'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>315,
            'id'=>1340,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>315,
            'id'=>1341,
            'semt_ad'=>'Kopal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>316,
            'id'=>1342,
            'semt_ad'=>'Karayazı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>316,
            'id'=>1343,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>316,
            'id'=>1344,
            'semt_ad'=>'Elmalıdere(Mollaosman)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>316,
            'id'=>1345,
            'semt_ad'=>'Göksu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>316,
            'id'=>1346,
            'semt_ad'=>'Söylemez(Mescitli)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>317,
            'id'=>1347,
            'semt_ad'=>'Köprüköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>317,
            'id'=>1348,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>317,
            'id'=>1349,
            'semt_ad'=>'Yağan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>318,
            'id'=>1350,
            'semt_ad'=>'Narman'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>318,
            'id'=>1351,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>319,
            'id'=>1352,
            'semt_ad'=>'Oltu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>319,
            'id'=>1353,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>320,
            'id'=>1354,
            'semt_ad'=>'Olur'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>320,
            'id'=>1355,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>322,
            'id'=>1356,
            'semt_ad'=>'Pasinler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>322,
            'id'=>1357,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>323,
            'id'=>1358,
            'semt_ad'=>'Pazaryolu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>323,
            'id'=>1359,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>324,
            'id'=>1360,
            'semt_ad'=>'Şenkaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>324,
            'id'=>1361,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>324,
            'id'=>1362,
            'semt_ad'=>'Akşar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>324,
            'id'=>1363,
            'semt_ad'=>'Gaziler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>324,
            'id'=>1364,
            'semt_ad'=>'Kömürlü(Göllet)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>324,
            'id'=>1365,
            'semt_ad'=>'Paşalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>325,
            'id'=>1366,
            'semt_ad'=>'Tekman'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>325,
            'id'=>1367,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>326,
            'id'=>1368,
            'semt_ad'=>'Tortum'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>326,
            'id'=>1369,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>326,
            'id'=>1370,
            'semt_ad'=>'Şenyurt(Uncular)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>326,
            'id'=>1371,
            'semt_ad'=>'Pehlivanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>326,
            'id'=>1372,
            'semt_ad'=>'Bağbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>326,
            'id'=>1373,
            'semt_ad'=>'Serdarlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>327,
            'id'=>1374,
            'semt_ad'=>'Uzundere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>327,
            'id'=>1375,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1376,
            'semt_ad'=>'Arifiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1377,
            'semt_ad'=>'Akarbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1378,
            'semt_ad'=>'Akcami'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1379,
            'semt_ad'=>'Büyükdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1380,
            'semt_ad'=>'Erenköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1381,
            'semt_ad'=>'Küçükorganizesanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1382,
            'semt_ad'=>'71 Evler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1383,
            'semt_ad'=>'Kurtuluş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1384,
            'semt_ad'=>'Gökmeydan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1385,
            'semt_ad'=>'Organizesanayibölgesi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1386,
            'semt_ad'=>'Osmangazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1387,
            'semt_ad'=>'Orhangazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1388,
            'semt_ad'=>'Çankaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1389,
            'semt_ad'=>'Sultandere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1390,
            'semt_ad'=>'Ağapınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>338,
            'id'=>1391,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1392,
            'semt_ad'=>'Hacıalibey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1393,
            'semt_ad'=>'Cumhuriye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1394,
            'semt_ad'=>'Sazova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1395,
            'semt_ad'=>'Bahçelievler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1396,
            'semt_ad'=>'Çamlıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1397,
            'semt_ad'=>'Uluönder'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1398,
            'semt_ad'=>'Şirintepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1399,
            'semt_ad'=>'Sütlüce'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1400,
            'semt_ad'=>'Fatih'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1401,
            'semt_ad'=>'Fevziçakmak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1402,
            'semt_ad'=>'Ertuğrulgazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1403,
            'semt_ad'=>'Çukurhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1404,
            'semt_ad'=>'Muttalip'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1405,
            'semt_ad'=>'Alınca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>342,
            'id'=>1406,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>329,
            'id'=>1407,
            'semt_ad'=>'Alpu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>329,
            'id'=>1408,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>329,
            'id'=>1409,
            'semt_ad'=>'Bozan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>330,
            'id'=>1410,
            'semt_ad'=>'Beylikova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>330,
            'id'=>1411,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>331,
            'id'=>1412,
            'semt_ad'=>'Çifteler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>331,
            'id'=>1413,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>332,
            'id'=>1414,
            'semt_ad'=>'Günyüzü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>332,
            'id'=>1415,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>333,
            'id'=>1416,
            'semt_ad'=>'Han'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>333,
            'id'=>1417,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>334,
            'id'=>1418,
            'semt_ad'=>'İnönü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>334,
            'id'=>1419,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>335,
            'id'=>1420,
            'semt_ad'=>'Mahmudiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>335,
            'id'=>1421,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>336,
            'id'=>1422,
            'semt_ad'=>'Mihalgazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>336,
            'id'=>1423,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>336,
            'id'=>1424,
            'semt_ad'=>'Sakarlıılıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>337,
            'id'=>1425,
            'semt_ad'=>'Mihalıçcık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>337,
            'id'=>1426,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>339,
            'id'=>1427,
            'semt_ad'=>'Sarıcakaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>339,
            'id'=>1428,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>340,
            'id'=>1429,
            'semt_ad'=>'Seyitgazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>340,
            'id'=>1430,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>340,
            'id'=>1431,
            'semt_ad'=>'Kırka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>341,
            'id'=>1432,
            'semt_ad'=>'Sivrihisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>341,
            'id'=>1433,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>349,
            'id'=>1434,
            'semt_ad'=>'Alaybey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>349,
            'id'=>1435,
            'semt_ad'=>'Düztepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>349,
            'id'=>1436,
            'semt_ad'=>'Hoşgör'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>349,
            'id'=>1437,
            'semt_ad'=>'Karataş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>349,
            'id'=>1438,
            'semt_ad'=>'Konak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>349,
            'id'=>1439,
            'semt_ad'=>'Perilikaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>349,
            'id'=>1440,
            'semt_ad'=>'Tabakhane'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>349,
            'id'=>1441,
            'semt_ad'=>'Sarıbaşak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>349,
            'id'=>1442,
            'semt_ad'=>'Geneyik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>349,
            'id'=>1443,
            'semt_ad'=>'Bağlarbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>349,
            'id'=>1444,
            'semt_ad'=>'Burç'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>349,
            'id'=>1445,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1446,
            'semt_ad'=>'Alleben'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1447,
            'semt_ad'=>'Atatürk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1448,
            'semt_ad'=>'Çıksorut'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1449,
            'semt_ad'=>'Gazikent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1450,
            'semt_ad'=>'Karşıyaka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1451,
            'semt_ad'=>'Kavaklık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1452,
            'semt_ad'=>'Küsget'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1453,
            'semt_ad'=>'Merve'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1454,
            'semt_ad'=>'Başpınarorganizesanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1455,
            'semt_ad'=>'Safaşehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1456,
            'semt_ad'=>'Beylerbeyi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1457,
            'semt_ad'=>'Aktoprak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1458,
            'semt_ad'=>'Arıl'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1459,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>350,
            'id'=>1460,
            'semt_ad'=>'Bilek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>348,
            'id'=>1461,
            'semt_ad'=>'Oğuzeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>348,
            'id'=>1462,
            'semt_ad'=>'Büyükşahinbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>348,
            'id'=>1463,
            'semt_ad'=>'Yeşildere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>348,
            'id'=>1464,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>348,
            'id'=>1465,
            'semt_ad'=>'Doğanpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>343,
            'id'=>1466,
            'semt_ad'=>'Araban'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>343,
            'id'=>1467,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>343,
            'id'=>1468,
            'semt_ad'=>'Elifköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>344,
            'id'=>1469,
            'semt_ad'=>'İslahiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>344,
            'id'=>1470,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>344,
            'id'=>1471,
            'semt_ad'=>'Altınüzüm'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>344,
            'id'=>1472,
            'semt_ad'=>'Boğaziçi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>344,
            'id'=>1473,
            'semt_ad'=>'Fevzipaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>344,
            'id'=>1474,
            'semt_ad'=>'Yeşilyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>345,
            'id'=>1475,
            'semt_ad'=>'Karkamış'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>345,
            'id'=>1476,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>346,
            'id'=>1477,
            'semt_ad'=>'Nizip'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>346,
            'id'=>1478,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>346,
            'id'=>1479,
            'semt_ad'=>'Salkım'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>346,
            'id'=>1480,
            'semt_ad'=>'Sekili'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>346,
            'id'=>1481,
            'semt_ad'=>'Uluyatır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>346,
            'id'=>1482,
            'semt_ad'=>'Kocatepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>347,
            'id'=>1483,
            'semt_ad'=>'Nurdağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>347,
            'id'=>1484,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>347,
            'id'=>1485,
            'semt_ad'=>'Sakcagözü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>347,
            'id'=>1486,
            'semt_ad'=>'Şatırhüyük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>351,
            'id'=>1487,
            'semt_ad'=>'Yavuzeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>351,
            'id'=>1488,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>360,
            'id'=>1489,
            'semt_ad'=>'Aksu/Gedikkaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>360,
            'id'=>1490,
            'semt_ad'=>'Batlama/Güre'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>360,
            'id'=>1491,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>360,
            'id'=>1492,
            'semt_ad'=>'Çaldağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>360,
            'id'=>1493,
            'semt_ad'=>'İnişdibi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>352,
            'id'=>1494,
            'semt_ad'=>'Alucra'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>352,
            'id'=>1495,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>353,
            'id'=>1496,
            'semt_ad'=>'Bulancak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>353,
            'id'=>1497,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>353,
            'id'=>1498,
            'semt_ad'=>'Aydındere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>354,
            'id'=>1499,
            'semt_ad'=>'Çamoluk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>354,
            'id'=>1500,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>354,
            'id'=>1501,
            'semt_ad'=>'Yenice'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>355,
            'id'=>1502,
            'semt_ad'=>'Çanakçı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>355,
            'id'=>1503,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>356,
            'id'=>1504,
            'semt_ad'=>'Dereli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>356,
            'id'=>1505,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>356,
            'id'=>1506,
            'semt_ad'=>'Yavuzkemal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>357,
            'id'=>1507,
            'semt_ad'=>'Doğankent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>357,
            'id'=>1508,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>358,
            'id'=>1509,
            'semt_ad'=>'Espiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>358,
            'id'=>1510,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>358,
            'id'=>1511,
            'semt_ad'=>'Soğukpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>359,
            'id'=>1512,
            'semt_ad'=>'Eynesil'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>359,
            'id'=>1513,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>359,
            'id'=>1514,
            'semt_ad'=>'Ören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>361,
            'id'=>1515,
            'semt_ad'=>'Görele'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>361,
            'id'=>1516,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>361,
            'id'=>1517,
            'semt_ad'=>'Çavuşlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>362,
            'id'=>1518,
            'semt_ad'=>'Güce'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>362,
            'id'=>1519,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>363,
            'id'=>1520,
            'semt_ad'=>'Keşap'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>363,
            'id'=>1521,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>364,
            'id'=>1522,
            'semt_ad'=>'Piraziz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>364,
            'id'=>1523,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>364,
            'id'=>1524,
            'semt_ad'=>'Bozat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>365,
            'id'=>1525,
            'semt_ad'=>'Şebinkarahisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>365,
            'id'=>1526,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>366,
            'id'=>1527,
            'semt_ad'=>'Tirebolu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>366,
            'id'=>1528,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>367,
            'id'=>1529,
            'semt_ad'=>'Yağlıdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>367,
            'id'=>1530,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>367,
            'id'=>1531,
            'semt_ad'=>'Üçtepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>368,
            'id'=>1532,
            'semt_ad'=>'Gümüşhane'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>368,
            'id'=>1533,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>368,
            'id'=>1534,
            'semt_ad'=>'Kale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>368,
            'id'=>1535,
            'semt_ad'=>'Yağmurdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>368,
            'id'=>1536,
            'semt_ad'=>'Çamlıköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>369,
            'id'=>1537,
            'semt_ad'=>'Kelkit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>369,
            'id'=>1538,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>369,
            'id'=>1539,
            'semt_ad'=>'Ünlüpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>369,
            'id'=>1540,
            'semt_ad'=>'Deredolu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>369,
            'id'=>1541,
            'semt_ad'=>'Gümüşgöze'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>369,
            'id'=>1542,
            'semt_ad'=>'Öbektaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>369,
            'id'=>1543,
            'semt_ad'=>'Söğütlü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>369,
            'id'=>1544,
            'semt_ad'=>'Kaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>370,
            'id'=>1545,
            'semt_ad'=>'Köse'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>370,
            'id'=>1546,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>371,
            'id'=>1547,
            'semt_ad'=>'Kürtün'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>371,
            'id'=>1548,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>371,
            'id'=>1549,
            'semt_ad'=>'Çayra'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>371,
            'id'=>1550,
            'semt_ad'=>'Süme'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>371,
            'id'=>1551,
            'semt_ad'=>'Özkürtün'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>372,
            'id'=>1552,
            'semt_ad'=>'Şiran'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>372,
            'id'=>1553,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>372,
            'id'=>1554,
            'semt_ad'=>'Yeşilbük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>373,
            'id'=>1555,
            'semt_ad'=>'Torul'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>373,
            'id'=>1556,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>373,
            'id'=>1557,
            'semt_ad'=>'Altınpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>375,
            'id'=>1558,
            'semt_ad'=>'Hakkari'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>375,
            'id'=>1559,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>375,
            'id'=>1560,
            'semt_ad'=>'Durankaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>374,
            'id'=>1561,
            'semt_ad'=>'Çukurca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>374,
            'id'=>1562,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>376,
            'id'=>1563,
            'semt_ad'=>'Şemdinli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>376,
            'id'=>1564,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>376,
            'id'=>1565,
            'semt_ad'=>'Derecik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>377,
            'id'=>1566,
            'semt_ad'=>'Yüksekova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>377,
            'id'=>1567,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>377,
            'id'=>1568,
            'semt_ad'=>'Esendere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>377,
            'id'=>1569,
            'semt_ad'=>'Büyükçiftlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1570,
            'semt_ad'=>'Esentepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1571,
            'semt_ad'=>'Elektrik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1572,
            'semt_ad'=>'Kanatlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1573,
            'semt_ad'=>'Haraparası'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1574,
            'semt_ad'=>'Aydınlıkevler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1575,
            'semt_ad'=>'Kışlasaray'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1576,
            'semt_ad'=>'Gazipaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1577,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1578,
            'semt_ad'=>'Harbiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1579,
            'semt_ad'=>'Çekmece'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1580,
            'semt_ad'=>'Serinyol'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1581,
            'semt_ad'=>'Kuzeytepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1582,
            'semt_ad'=>'Karaali'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1583,
            'semt_ad'=>'Karlısu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1584,
            'semt_ad'=>'Avsuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1585,
            'semt_ad'=>'Subaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1586,
            'semt_ad'=>'Dursunlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1587,
            'semt_ad'=>'Ekinci'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1588,
            'semt_ad'=>'Yoncakaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1589,
            'semt_ad'=>'Şenköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1590,
            'semt_ad'=>'Tosunpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1591,
            'semt_ad'=>'Odabaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1592,
            'semt_ad'=>'Narlıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1593,
            'semt_ad'=>'Küçükdalyan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1594,
            'semt_ad'=>'Toygarlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1595,
            'semt_ad'=>'Güzelburç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1596,
            'semt_ad'=>'Maşuklu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1597,
            'semt_ad'=>'Ovakent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>379,
            'id'=>1598,
            'semt_ad'=>'Gümüşgöze'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>378,
            'id'=>1599,
            'semt_ad'=>'Altınözü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>378,
            'id'=>1600,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>378,
            'id'=>1601,
            'semt_ad'=>'Yiğityolu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>378,
            'id'=>1602,
            'semt_ad'=>'Babatorun'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>378,
            'id'=>1603,
            'semt_ad'=>'Hacıpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>380,
            'id'=>1604,
            'semt_ad'=>'Belen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>380,
            'id'=>1605,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>381,
            'id'=>1606,
            'semt_ad'=>'Dörtyol'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>381,
            'id'=>1607,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>381,
            'id'=>1608,
            'semt_ad'=>'Kuzuculu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>381,
            'id'=>1609,
            'semt_ad'=>'Yeşilköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>381,
            'id'=>1610,
            'semt_ad'=>'Payas(Yakacık)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>381,
            'id'=>1611,
            'semt_ad'=>'Yeniyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>381,
            'id'=>1612,
            'semt_ad'=>'Altınçağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>381,
            'id'=>1613,
            'semt_ad'=>'Karakese'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>382,
            'id'=>1614,
            'semt_ad'=>'Erzin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>382,
            'id'=>1615,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>383,
            'id'=>1616,
            'semt_ad'=>'Hassa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>383,
            'id'=>1617,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>383,
            'id'=>1618,
            'semt_ad'=>'Küreci'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>383,
            'id'=>1619,
            'semt_ad'=>'Aktepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>383,
            'id'=>1620,
            'semt_ad'=>'Akbez'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>383,
            'id'=>1621,
            'semt_ad'=>'Ardıçlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1622,
            'semt_ad'=>'Cumhuriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1623,
            'semt_ad'=>'Meydan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1624,
            'semt_ad'=>'Tepeler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1625,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1626,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1627,
            'semt_ad'=>'Nardüzü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1628,
            'semt_ad'=>'Bekbele'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1629,
            'semt_ad'=>'Azganlık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1630,
            'semt_ad'=>'Gözcüler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1631,
            'semt_ad'=>'Karaağaç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1632,
            'semt_ad'=>'Madenli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1633,
            'semt_ad'=>'Karayılan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1634,
            'semt_ad'=>'Arsuz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1635,
            'semt_ad'=>'Denizciler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>384,
            'id'=>1636,
            'semt_ad'=>'Sarıseki'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>385,
            'id'=>1637,
            'semt_ad'=>'Kırıkhan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>385,
            'id'=>1638,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>385,
            'id'=>1639,
            'semt_ad'=>'Kurtlusoğuksu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>386,
            'id'=>1640,
            'semt_ad'=>'Kumlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>386,
            'id'=>1641,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>387,
            'id'=>1642,
            'semt_ad'=>'Reyhanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>387,
            'id'=>1643,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1644,
            'semt_ad'=>'Samandağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1645,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1646,
            'semt_ad'=>'Karaçay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1647,
            'semt_ad'=>'Değirmenbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1648,
            'semt_ad'=>'Koyunoğlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1649,
            'semt_ad'=>'Mızraklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1650,
            'semt_ad'=>'Tavla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1651,
            'semt_ad'=>'Tekebaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1652,
            'semt_ad'=>'Uzunbağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1653,
            'semt_ad'=>'Yaylıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1654,
            'semt_ad'=>'Aknehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1655,
            'semt_ad'=>'Mağracık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1656,
            'semt_ad'=>'Kuşalanı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1657,
            'semt_ad'=>'Sutaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>388,
            'id'=>1658,
            'semt_ad'=>'Tomruksuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>389,
            'id'=>1659,
            'semt_ad'=>'Yayladağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>389,
            'id'=>1660,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>389,
            'id'=>1661,
            'semt_ad'=>'Karaköse'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>395,
            'id'=>1662,
            'semt_ad'=>'Çelebiler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>395,
            'id'=>1663,
            'semt_ad'=>'Kutlubey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>395,
            'id'=>1664,
            'semt_ad'=>'Anadolu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>395,
            'id'=>1665,
            'semt_ad'=>'Kepeci'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>395,
            'id'=>1666,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>395,
            'id'=>1667,
            'semt_ad'=>'Kuleönü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>395,
            'id'=>1668,
            'semt_ad'=>'Savköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>390,
            'id'=>1669,
            'semt_ad'=>'Aksu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>390,
            'id'=>1670,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>391,
            'id'=>1671,
            'semt_ad'=>'Atabey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>391,
            'id'=>1672,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>392,
            'id'=>1673,
            'semt_ad'=>'Eğirdir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>392,
            'id'=>1674,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>392,
            'id'=>1675,
            'semt_ad'=>'Sarıidris'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>393,
            'id'=>1676,
            'semt_ad'=>'Gelendost'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>393,
            'id'=>1677,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>393,
            'id'=>1678,
            'semt_ad'=>'Bağıllı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>393,
            'id'=>1679,
            'semt_ad'=>'Yaka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>394,
            'id'=>1680,
            'semt_ad'=>'Gönen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>394,
            'id'=>1681,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>396,
            'id'=>1682,
            'semt_ad'=>'Keçiborlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>396,
            'id'=>1683,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>396,
            'id'=>1684,
            'semt_ad'=>'Kılıç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>396,
            'id'=>1685,
            'semt_ad'=>'Senir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>397,
            'id'=>1686,
            'semt_ad'=>'Senirkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>397,
            'id'=>1687,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>397,
            'id'=>1688,
            'semt_ad'=>'Büyükkabaca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>398,
            'id'=>1689,
            'semt_ad'=>'Sütçüler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>398,
            'id'=>1690,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>399,
            'id'=>1691,
            'semt_ad'=>'Şarkikaraağaç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>399,
            'id'=>1692,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>399,
            'id'=>1693,
            'semt_ad'=>'Çarıksaraylar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>399,
            'id'=>1694,
            'semt_ad'=>'Çiçekpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>400,
            'id'=>1695,
            'semt_ad'=>'Uluborlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>400,
            'id'=>1696,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>401,
            'id'=>1697,
            'semt_ad'=>'Yalvaç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>401,
            'id'=>1698,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>401,
            'id'=>1699,
            'semt_ad'=>'Bağkonak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>401,
            'id'=>1700,
            'semt_ad'=>'Çetince'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>401,
            'id'=>1701,
            'semt_ad'=>'Dedeçam'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>401,
            'id'=>1702,
            'semt_ad'=>'Hüyüklü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>401,
            'id'=>1703,
            'semt_ad'=>'Kozluçay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>401,
            'id'=>1704,
            'semt_ad'=>'Özbayat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>401,
            'id'=>1705,
            'semt_ad'=>'Tokmacık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>402,
            'id'=>1706,
            'semt_ad'=>'Yenişarbademli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>402,
            'id'=>1707,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1708,
            'semt_ad'=>'Barış'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1709,
            'semt_ad'=>'Karaduvar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1710,
            'semt_ad'=>'Mithatpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1711,
            'semt_ad'=>'Nusratiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1712,
            'semt_ad'=>'Camiişerif'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1713,
            'semt_ad'=>'Çankaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1714,
            'semt_ad'=>'Çay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1715,
            'semt_ad'=>'Özgürlük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1716,
            'semt_ad'=>'Bağcılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1717,
            'semt_ad'=>'Huzurkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1718,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1719,
            'semt_ad'=>'Bahçeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1720,
            'semt_ad'=>'Dikilitaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1721,
            'semt_ad'=>'Gözne'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1722,
            'semt_ad'=>'Adanalıoğlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1723,
            'semt_ad'=>'Karacailyas'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1724,
            'semt_ad'=>'Kaşlı(Düğdüören)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1725,
            'semt_ad'=>'Soğucak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>403,
            'id'=>1726,
            'semt_ad'=>'Yenitaşkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>415,
            'id'=>1727,
            'semt_ad'=>'Cumhuriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>415,
            'id'=>1728,
            'semt_ad'=>'Hürriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>415,
            'id'=>1729,
            'semt_ad'=>'Gazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>415,
            'id'=>1730,
            'semt_ad'=>'Bahçelievler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>415,
            'id'=>1731,
            'semt_ad'=>'Barbaros'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>415,
            'id'=>1732,
            'semt_ad'=>'Egriçam'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>415,
            'id'=>1733,
            'semt_ad'=>'Çiftlikköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>415,
            'id'=>1734,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>415,
            'id'=>1735,
            'semt_ad'=>'Değirmençay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>414,
            'id'=>1736,
            'semt_ad'=>'Sağlık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>414,
            'id'=>1737,
            'semt_ad'=>'Alsancak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>414,
            'id'=>1738,
            'semt_ad'=>'Akbelen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>414,
            'id'=>1739,
            'semt_ad'=>'Çavuşlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>414,
            'id'=>1740,
            'semt_ad'=>'Halkkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>414,
            'id'=>1741,
            'semt_ad'=>'Toroslar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>414,
            'id'=>1742,
            'semt_ad'=>'Arpaçsakarlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>414,
            'id'=>1743,
            'semt_ad'=>'Yalınayak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>414,
            'id'=>1744,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>414,
            'id'=>1745,
            'semt_ad'=>'Ayvagediği'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>414,
            'id'=>1746,
            'semt_ad'=>'Güzelyayla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>410,
            'id'=>1747,
            'semt_ad'=>'Mezitli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>410,
            'id'=>1748,
            'semt_ad'=>'Davultepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>410,
            'id'=>1749,
            'semt_ad'=>'Tece'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>410,
            'id'=>1750,
            'semt_ad'=>'Kuyuluk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>410,
            'id'=>1751,
            'semt_ad'=>'Dorukkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>410,
            'id'=>1752,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>410,
            'id'=>1753,
            'semt_ad'=>'Tepeköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>410,
            'id'=>1754,
            'semt_ad'=>'Fındıkpınarı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>404,
            'id'=>1755,
            'semt_ad'=>'Yıldırımbeyazıt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>404,
            'id'=>1756,
            'semt_ad'=>'Göktaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>404,
            'id'=>1757,
            'semt_ad'=>'İskele'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>404,
            'id'=>1758,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>404,
            'id'=>1759,
            'semt_ad'=>'Ören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>404,
            'id'=>1760,
            'semt_ad'=>'Çarıklar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>405,
            'id'=>1761,
            'semt_ad'=>'Aydıncık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>405,
            'id'=>1762,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>406,
            'id'=>1763,
            'semt_ad'=>'Bozyazı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>406,
            'id'=>1764,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>406,
            'id'=>1765,
            'semt_ad'=>'Tekeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>406,
            'id'=>1766,
            'semt_ad'=>'Tekmen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>407,
            'id'=>1767,
            'semt_ad'=>'Çamlıyayla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>407,
            'id'=>1768,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>407,
            'id'=>1769,
            'semt_ad'=>'Sebil'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>408,
            'id'=>1770,
            'semt_ad'=>'Akdeniz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>408,
            'id'=>1771,
            'semt_ad'=>'Alata'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>408,
            'id'=>1772,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>408,
            'id'=>1773,
            'semt_ad'=>'Kocahasanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>408,
            'id'=>1774,
            'semt_ad'=>'Limonlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>408,
            'id'=>1775,
            'semt_ad'=>'Kumkuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>408,
            'id'=>1776,
            'semt_ad'=>'Tömük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>408,
            'id'=>1777,
            'semt_ad'=>'Arpaçbahşiş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>408,
            'id'=>1778,
            'semt_ad'=>'Çeşmeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>408,
            'id'=>1779,
            'semt_ad'=>'Kargıpınarı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>409,
            'id'=>1780,
            'semt_ad'=>'Gülnar(Gülpınar)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>409,
            'id'=>1781,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>409,
            'id'=>1782,
            'semt_ad'=>'Köseçobanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>409,
            'id'=>1783,
            'semt_ad'=>'Kuskan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>409,
            'id'=>1784,
            'semt_ad'=>'Zeyne(Sütlüce)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>411,
            'id'=>1785,
            'semt_ad'=>'Mut'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>411,
            'id'=>1786,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>411,
            'id'=>1787,
            'semt_ad'=>'Göksu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>412,
            'id'=>1788,
            'semt_ad'=>'Saray'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>412,
            'id'=>1789,
            'semt_ad'=>'Pazarkaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>412,
            'id'=>1790,
            'semt_ad'=>'Gazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>412,
            'id'=>1791,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>412,
            'id'=>1792,
            'semt_ad'=>'Atayurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>412,
            'id'=>1793,
            'semt_ad'=>'Atakent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>412,
            'id'=>1794,
            'semt_ad'=>'Taşucu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>412,
            'id'=>1795,
            'semt_ad'=>'Yeşilovacık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1796,
            'semt_ad'=>'Kızılmurat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1797,
            'semt_ad'=>'Kavaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1798,
            'semt_ad'=>'Altaylılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1799,
            'semt_ad'=>'Anıt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1800,
            'semt_ad'=>'Caminur'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1801,
            'semt_ad'=>'Bahçe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1802,
            'semt_ad'=>'82 Evler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1803,
            'semt_ad'=>'Beydeğirmeni'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1804,
            'semt_ad'=>'Akşemsettin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1805,
            'semt_ad'=>'Eskiömerli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1806,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1807,
            'semt_ad'=>'Atalar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1808,
            'semt_ad'=>'Bahşiş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1809,
            'semt_ad'=>'Yeşiltepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>413,
            'id'=>1810,
            'semt_ad'=>'Yenice'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>422,
            'id'=>1811,
            'semt_ad'=>'Zeytinlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>422,
            'id'=>1812,
            'semt_ad'=>'Cevizlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>422,
            'id'=>1813,
            'semt_ad'=>'Kartaltepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>422,
            'id'=>1814,
            'semt_ad'=>'Zuhuratbaba'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>422,
            'id'=>1815,
            'semt_ad'=>'Yeşilköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>422,
            'id'=>1816,
            'semt_ad'=>'Florya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>422,
            'id'=>1817,
            'semt_ad'=>'Ataköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>424,
            'id'=>1818,
            'semt_ad'=>'Numunebağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>424,
            'id'=>1819,
            'semt_ad'=>'Altıntepsi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>424,
            'id'=>1820,
            'semt_ad'=>'Muratpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>424,
            'id'=>1821,
            'semt_ad'=>'Yıldırım'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>425,
            'id'=>1822,
            'semt_ad'=>'Levent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>425,
            'id'=>1823,
            'semt_ad'=>'Akatlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>425,
            'id'=>1824,
            'semt_ad'=>'Etiler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>425,
            'id'=>1825,
            'semt_ad'=>'Levazım'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>425,
            'id'=>1826,
            'semt_ad'=>'Bebek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>425,
            'id'=>1827,
            'semt_ad'=>'Arnavutköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>425,
            'id'=>1828,
            'semt_ad'=>'Ortaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>425,
            'id'=>1829,
            'semt_ad'=>'Gayrettepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>425,
            'id'=>1830,
            'semt_ad'=>'Abbasağa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>425,
            'id'=>1831,
            'semt_ad'=>'Türkali'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>428,
            'id'=>1832,
            'semt_ad'=>'Arapcami'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>428,
            'id'=>1833,
            'semt_ad'=>'Kemankeş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>428,
            'id'=>1834,
            'semt_ad'=>'Pürtelaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>428,
            'id'=>1835,
            'semt_ad'=>'İstiklal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>428,
            'id'=>1836,
            'semt_ad'=>'Cihangir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>428,
            'id'=>1837,
            'semt_ad'=>'Tarlabaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>428,
            'id'=>1838,
            'semt_ad'=>'Taksim'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>428,
            'id'=>1839,
            'semt_ad'=>'Kasımpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>428,
            'id'=>1840,
            'semt_ad'=>'Halıcıoğlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>417,
            'id'=>1841,
            'semt_ad'=>'Arnavutköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>417,
            'id'=>1842,
            'semt_ad'=>'Boğazköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>417,
            'id'=>1843,
            'semt_ad'=>'Bolluca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>417,
            'id'=>1844,
            'semt_ad'=>'Haraççı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>417,
            'id'=>1845,
            'semt_ad'=>'Taşoluk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>417,
            'id'=>1846,
            'semt_ad'=>'Hadımköy(Boyalık)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>417,
            'id'=>1847,
            'semt_ad'=>'Durusu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>417,
            'id'=>1848,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>434,
            'id'=>1849,
            'semt_ad'=>'Eyüp'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>434,
            'id'=>1850,
            'semt_ad'=>'Rami'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>434,
            'id'=>1851,
            'semt_ad'=>'Alibeyköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>434,
            'id'=>1852,
            'semt_ad'=>'Yeşilpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>434,
            'id'=>1853,
            'semt_ad'=>'Çırçır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>434,
            'id'=>1854,
            'semt_ad'=>'Kemerburgaz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>434,
            'id'=>1855,
            'semt_ad'=>'Göktürk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>434,
            'id'=>1856,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1857,
            'semt_ad'=>'Akdeniz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1858,
            'semt_ad'=>'Küçükmustafapaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1859,
            'semt_ad'=>'Fener'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1860,
            'semt_ad'=>'Karagümrük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1861,
            'semt_ad'=>'Aksaray'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1862,
            'semt_ad'=>'Haseki'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1863,
            'semt_ad'=>'Kocamustafapaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1864,
            'semt_ad'=>'Mevlanakapı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1865,
            'semt_ad'=>'Yedikule'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1866,
            'semt_ad'=>'Eminönü/Cağaloğlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1867,
            'semt_ad'=>'Sirkeci'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1868,
            'semt_ad'=>'Tahtakale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1869,
            'semt_ad'=>'Mahmutpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1870,
            'semt_ad'=>'Sultanahmet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1871,
            'semt_ad'=>'Beyazıt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1872,
            'semt_ad'=>'Kumkapı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>435,
            'id'=>1873,
            'semt_ad'=>'Vefa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>436,
            'id'=>1874,
            'semt_ad'=>'Yıldıztabya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>436,
            'id'=>1875,
            'semt_ad'=>'Gaziosmanpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>436,
            'id'=>1876,
            'semt_ad'=>'Küçükköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>436,
            'id'=>1877,
            'semt_ad'=>'Fevziçakmak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>436,
            'id'=>1878,
            'semt_ad'=>'Göztepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>439,
            'id'=>1879,
            'semt_ad'=>'Zincirlikuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>439,
            'id'=>1880,
            'semt_ad'=>'Çağlayan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>439,
            'id'=>1881,
            'semt_ad'=>'Kağıthane'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>439,
            'id'=>1882,
            'semt_ad'=>'Hamidiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>439,
            'id'=>1883,
            'semt_ad'=>'Gültepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>439,
            'id'=>1884,
            'semt_ad'=>'Çeliktepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>439,
            'id'=>1885,
            'semt_ad'=>'Şirintepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>439,
            'id'=>1886,
            'semt_ad'=>'Seyrantepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>441,
            'id'=>1887,
            'semt_ad'=>'Cennet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>441,
            'id'=>1888,
            'semt_ad'=>'Sefaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>441,
            'id'=>1889,
            'semt_ad'=>'Halkalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>441,
            'id'=>1890,
            'semt_ad'=>'Yarımburgaz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>441,
            'id'=>1891,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>445,
            'id'=>1892,
            'semt_ad'=>'Sarıyer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>445,
            'id'=>1893,
            'semt_ad'=>'Büyükdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>445,
            'id'=>1894,
            'semt_ad'=>'Tarabya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>445,
            'id'=>1895,
            'semt_ad'=>'İstinye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>445,
            'id'=>1896,
            'semt_ad'=>'Yeniköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>445,
            'id'=>1897,
            'semt_ad'=>'Emirgan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>445,
            'id'=>1898,
            'semt_ad'=>'Rumelihisarı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>445,
            'id'=>1899,
            'semt_ad'=>'Bahçeköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>445,
            'id'=>1900,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1901,
            'semt_ad'=>'39587'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1902,
            'semt_ad'=>'Meşrutiyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1903,
            'semt_ad'=>'Teşvikiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1904,
            'semt_ad'=>'Harbiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1905,
            'semt_ad'=>'Halaskargazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1906,
            'semt_ad'=>'Pangaltı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1907,
            'semt_ad'=>'Bozkurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1908,
            'semt_ad'=>'Feriköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1909,
            'semt_ad'=>'Duatepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1910,
            'semt_ad'=>'Cumhuriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1911,
            'semt_ad'=>'Şişli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1912,
            'semt_ad'=>'Halideedip'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1913,
            'semt_ad'=>'Okmeydanı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1914,
            'semt_ad'=>'Mecidiyeköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1915,
            'semt_ad'=>'Esentepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1916,
            'semt_ad'=>'Ayazağa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>450,
            'id'=>1917,
            'semt_ad'=>'Maslak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>454,
            'id'=>1918,
            'semt_ad'=>'Maltepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>454,
            'id'=>1919,
            'semt_ad'=>'Merkezefendi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>454,
            'id'=>1920,
            'semt_ad'=>'Beştelsiz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>454,
            'id'=>1921,
            'semt_ad'=>'Çırpıcı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>419,
            'id'=>1922,
            'semt_ad'=>'Avcılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>419,
            'id'=>1923,
            'semt_ad'=>'Ambarlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>419,
            'id'=>1924,
            'semt_ad'=>'Gümüşpala'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>419,
            'id'=>1925,
            'semt_ad'=>'Firuzköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>437,
            'id'=>1926,
            'semt_ad'=>'Akıncılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>437,
            'id'=>1927,
            'semt_ad'=>'Güngören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>437,
            'id'=>1928,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>437,
            'id'=>1929,
            'semt_ad'=>'Tozkoparan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>437,
            'id'=>1930,
            'semt_ad'=>'Abdurrahmannafizgürman'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>421,
            'id'=>1931,
            'semt_ad'=>'Bahçelievler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>421,
            'id'=>1932,
            'semt_ad'=>'Siyavuşpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>421,
            'id'=>1933,
            'semt_ad'=>'Soğanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>421,
            'id'=>1934,
            'semt_ad'=>'Cumhuriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>421,
            'id'=>1935,
            'semt_ad'=>'Şirinevler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>421,
            'id'=>1936,
            'semt_ad'=>'Hürriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>421,
            'id'=>1937,
            'semt_ad'=>'Kocasinan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>421,
            'id'=>1938,
            'semt_ad'=>'Fevziçakmak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>421,
            'id'=>1939,
            'semt_ad'=>'Çobançeşme'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>421,
            'id'=>1940,
            'semt_ad'=>'Yenibosna'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>420,
            'id'=>1941,
            'semt_ad'=>'Bağcılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>420,
            'id'=>1942,
            'semt_ad'=>'Barbaros/Yeşilbağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>420,
            'id'=>1943,
            'semt_ad'=>'Kemalpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>420,
            'id'=>1944,
            'semt_ad'=>'Hürriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>420,
            'id'=>1945,
            'semt_ad'=>'Kirazlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>420,
            'id'=>1946,
            'semt_ad'=>'Güneşli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>420,
            'id'=>1947,
            'semt_ad'=>'Demirkapı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>420,
            'id'=>1948,
            'semt_ad'=>'Mahmutbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>432,
            'id'=>1949,
            'semt_ad'=>'Esenler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>432,
            'id'=>1950,
            'semt_ad'=>'Karabayır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>432,
            'id'=>1951,
            'semt_ad'=>'Birlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>432,
            'id'=>1952,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>423,
            'id'=>1953,
            'semt_ad'=>'İkitelli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>423,
            'id'=>1954,
            'semt_ad'=>'Atışalanı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>423,
            'id'=>1955,
            'semt_ad'=>'Mehmetakif'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>423,
            'id'=>1956,
            'semt_ad'=>'Bahçeşehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>423,
            'id'=>1957,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>427,
            'id'=>1958,
            'semt_ad'=>'Kavaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>427,
            'id'=>1959,
            'semt_ad'=>'Gürpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>427,
            'id'=>1960,
            'semt_ad'=>'Yakuplu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>433,
            'id'=>1961,
            'semt_ad'=>'Esenyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>433,
            'id'=>1962,
            'semt_ad'=>'Kıraç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>433,
            'id'=>1963,
            'semt_ad'=>'Haramidere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>433,
            'id'=>1964,
            'semt_ad'=>'Yeşilkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>433,
            'id'=>1965,
            'semt_ad'=>'Hoşdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>448,
            'id'=>1966,
            'semt_ad'=>'Sultançiftliği'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>448,
            'id'=>1967,
            'semt_ad'=>'Zübeydehanım'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>448,
            'id'=>1968,
            'semt_ad'=>'Cebeci'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>448,
            'id'=>1969,
            'semt_ad'=>'Kazımkarabekir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>448,
            'id'=>1970,
            'semt_ad'=>'Habipler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>448,
            'id'=>1971,
            'semt_ad'=>'Yayla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>416,
            'id'=>1972,
            'semt_ad'=>'Büyükada'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>416,
            'id'=>1973,
            'semt_ad'=>'Heybeliada'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>416,
            'id'=>1974,
            'semt_ad'=>'Burgazada'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>416,
            'id'=>1975,
            'semt_ad'=>'Kınalıada'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>426,
            'id'=>1976,
            'semt_ad'=>'Paşabahçe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>426,
            'id'=>1977,
            'semt_ad'=>'Çubuklu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>426,
            'id'=>1978,
            'semt_ad'=>'Anadoluhisarı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>426,
            'id'=>1979,
            'semt_ad'=>'Göksu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>426,
            'id'=>1980,
            'semt_ad'=>'Beykoz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>426,
            'id'=>1981,
            'semt_ad'=>'Tokatköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>426,
            'id'=>1982,
            'semt_ad'=>'Çavuşbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>426,
            'id'=>1983,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1984,
            'semt_ad'=>'Caferağa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1985,
            'semt_ad'=>'Osmanağa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1986,
            'semt_ad'=>'Rasimpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1987,
            'semt_ad'=>'Koşuyolu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1988,
            'semt_ad'=>'Fikirtepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1989,
            'semt_ad'=>'Eğitim'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1990,
            'semt_ad'=>'Feneryolu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1991,
            'semt_ad'=>'Fenerbahçe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1992,
            'semt_ad'=>'Caddebostan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1993,
            'semt_ad'=>'Göztepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1994,
            'semt_ad'=>'Merdivenköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1995,
            'semt_ad'=>'Sahrayıcedit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1996,
            'semt_ad'=>'Ondokuzmayıs(19 Mayıs)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1997,
            'semt_ad'=>'Erenköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1998,
            'semt_ad'=>'Suadiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>1999,
            'semt_ad'=>'Kozyatağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>438,
            'id'=>2000,
            'semt_ad'=>'Bostancı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>440,
            'id'=>2001,
            'semt_ad'=>'Kartal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>440,
            'id'=>2002,
            'semt_ad'=>'Rahmanlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>440,
            'id'=>2003,
            'semt_ad'=>'Orhantepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>440,
            'id'=>2004,
            'semt_ad'=>'Esentepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>440,
            'id'=>2005,
            'semt_ad'=>'Topselvi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>440,
            'id'=>2006,
            'semt_ad'=>'Yakacık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>440,
            'id'=>2007,
            'semt_ad'=>'Soğanlık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>440,
            'id'=>2008,
            'semt_ad'=>'Uğurmumcu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>440,
            'id'=>2009,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>443,
            'id'=>2010,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>443,
            'id'=>2011,
            'semt_ad'=>'Bahçelievler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>443,
            'id'=>2012,
            'semt_ad'=>'Dolayoba'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>443,
            'id'=>2013,
            'semt_ad'=>'Çamçeşme'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>443,
            'id'=>2014,
            'semt_ad'=>'Esenyalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>443,
            'id'=>2015,
            'semt_ad'=>'Şeyhli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>443,
            'id'=>2016,
            'semt_ad'=>'Yayalar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>443,
            'id'=>2017,
            'semt_ad'=>'Yenişehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>443,
            'id'=>2018,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>452,
            'id'=>2019,
            'semt_ad'=>'Atakent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>452,
            'id'=>2020,
            'semt_ad'=>'Atatürk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>452,
            'id'=>2021,
            'semt_ad'=>'Kazımkarabekir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>452,
            'id'=>2022,
            'semt_ad'=>'İnkılap'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>452,
            'id'=>2023,
            'semt_ad'=>'Çakmak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>452,
            'id'=>2024,
            'semt_ad'=>'Ihlamurkuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>452,
            'id'=>2025,
            'semt_ad'=>'Aşağıdudullu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>452,
            'id'=>2026,
            'semt_ad'=>'Yukarıdudullu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>452,
            'id'=>2027,
            'semt_ad'=>'Esenşehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>452,
            'id'=>2028,
            'semt_ad'=>'Reşadiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>453,
            'id'=>2029,
            'semt_ad'=>'Acıbadem'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>453,
            'id'=>2030,
            'semt_ad'=>'Altunizade'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>453,
            'id'=>2031,
            'semt_ad'=>'Bağlarbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>453,
            'id'=>2032,
            'semt_ad'=>'Selimiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>453,
            'id'=>2033,
            'semt_ad'=>'Üsküdar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>453,
            'id'=>2034,
            'semt_ad'=>'Kuzguncuk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>453,
            'id'=>2035,
            'semt_ad'=>'Beylerbeyi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>453,
            'id'=>2036,
            'semt_ad'=>'Çengelköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>453,
            'id'=>2037,
            'semt_ad'=>'Kandilli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>453,
            'id'=>2038,
            'semt_ad'=>'Bahçelievler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>453,
            'id'=>2039,
            'semt_ad'=>'Ferah'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>453,
            'id'=>2040,
            'semt_ad'=>'Bulgurlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>453,
            'id'=>2041,
            'semt_ad'=>'Ünalan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>451,
            'id'=>2042,
            'semt_ad'=>'İstasyon'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>451,
            'id'=>2043,
            'semt_ad'=>'Tersaneler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>451,
            'id'=>2044,
            'semt_ad'=>'İçmeler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>451,
            'id'=>2045,
            'semt_ad'=>'Mimarsinan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>451,
            'id'=>2046,
            'semt_ad'=>'Aydınlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>451,
            'id'=>2047,
            'semt_ad'=>'Orhanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>451,
            'id'=>2048,
            'semt_ad'=>'Akfırat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>442,
            'id'=>2049,
            'semt_ad'=>'Küçükyalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>442,
            'id'=>2050,
            'semt_ad'=>'İdealtepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>442,
            'id'=>2051,
            'semt_ad'=>'Feyzullah'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>442,
            'id'=>2052,
            'semt_ad'=>'Yalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>442,
            'id'=>2053,
            'semt_ad'=>'Cevizli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>442,
            'id'=>2054,
            'semt_ad'=>'Gülsuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>442,
            'id'=>2055,
            'semt_ad'=>'Zümrütevler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>442,
            'id'=>2056,
            'semt_ad'=>'Aydınevler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>442,
            'id'=>2057,
            'semt_ad'=>'Ferhatpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>418,
            'id'=>2058,
            'semt_ad'=>'Ataşehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>418,
            'id'=>2059,
            'semt_ad'=>'Yenisahra'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>418,
            'id'=>2060,
            'semt_ad'=>'Küçükbakkalköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>418,
            'id'=>2061,
            'semt_ad'=>'İçerenköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>418,
            'id'=>2062,
            'semt_ad'=>'Kayışdağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>418,
            'id'=>2063,
            'semt_ad'=>'Örnek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>418,
            'id'=>2064,
            'semt_ad'=>'Yeniçamlıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>418,
            'id'=>2065,
            'semt_ad'=>'Namıkkemal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>418,
            'id'=>2066,
            'semt_ad'=>'Ferhatpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>431,
            'id'=>2067,
            'semt_ad'=>'Çekmeköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>431,
            'id'=>2068,
            'semt_ad'=>'Alemdağ(Alemdar)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>431,
            'id'=>2069,
            'semt_ad'=>'Ömerli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>431,
            'id'=>2070,
            'semt_ad'=>'Taşdelen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>431,
            'id'=>2071,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>444,
            'id'=>2072,
            'semt_ad'=>'Sarıgazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>444,
            'id'=>2073,
            'semt_ad'=>'Yenidoğan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>444,
            'id'=>2074,
            'semt_ad'=>'Samandıra'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>444,
            'id'=>2075,
            'semt_ad'=>'Çamlık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>444,
            'id'=>2076,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>429,
            'id'=>2077,
            'semt_ad'=>'Büyükçekmece'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>429,
            'id'=>2078,
            'semt_ad'=>'Kumburgaz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>429,
            'id'=>2079,
            'semt_ad'=>'Mimarsinan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>429,
            'id'=>2080,
            'semt_ad'=>'Tepecik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>429,
            'id'=>2081,
            'semt_ad'=>'Celaliye(Kamiloba)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>429,
            'id'=>2082,
            'semt_ad'=>'Muratbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>430,
            'id'=>2083,
            'semt_ad'=>'Çatalca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>430,
            'id'=>2084,
            'semt_ad'=>'Binkılıç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>430,
            'id'=>2085,
            'semt_ad'=>'Çiftlikköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>430,
            'id'=>2086,
            'semt_ad'=>'Karacaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>430,
            'id'=>2087,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>446,
            'id'=>2088,
            'semt_ad'=>'Silivri'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>446,
            'id'=>2089,
            'semt_ad'=>'Değirmenköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>446,
            'id'=>2090,
            'semt_ad'=>'Gümüşyaka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>446,
            'id'=>2091,
            'semt_ad'=>'Selimpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>446,
            'id'=>2092,
            'semt_ad'=>'Çanta'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>446,
            'id'=>2093,
            'semt_ad'=>'Ortaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>446,
            'id'=>2094,
            'semt_ad'=>'Büyükçavuşlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>446,
            'id'=>2095,
            'semt_ad'=>'Kavaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>446,
            'id'=>2096,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>449,
            'id'=>2097,
            'semt_ad'=>'Şile'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>449,
            'id'=>2098,
            'semt_ad'=>'Ağva'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>449,
            'id'=>2099,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>447,
            'id'=>2100,
            'semt_ad'=>'Mehmetakif'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>447,
            'id'=>2101,
            'semt_ad'=>'Necipfazıl'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>447,
            'id'=>2102,
            'semt_ad'=>'Turgutreis'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>447,
            'id'=>2103,
            'semt_ad'=>'Mimarsinan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>455,
            'id'=>2104,
            'semt_ad'=>'Aliağa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>455,
            'id'=>2105,
            'semt_ad'=>'Helvacı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>455,
            'id'=>2106,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>455,
            'id'=>2107,
            'semt_ad'=>'Yenişakran'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>456,
            'id'=>2108,
            'semt_ad'=>'Balçova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>456,
            'id'=>2109,
            'semt_ad'=>'İnciraltı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>457,
            'id'=>2110,
            'semt_ad'=>'Bayındır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>457,
            'id'=>2111,
            'semt_ad'=>'Çırpı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>457,
            'id'=>2112,
            'semt_ad'=>'Çanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>457,
            'id'=>2113,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>461,
            'id'=>2114,
            'semt_ad'=>'Atatürk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>461,
            'id'=>2115,
            'semt_ad'=>'Bornova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>461,
            'id'=>2116,
            'semt_ad'=>'Naldöken'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>461,
            'id'=>2117,
            'semt_ad'=>'Pınarbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>461,
            'id'=>2118,
            'semt_ad'=>'Işıkkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>461,
            'id'=>2119,
            'semt_ad'=>'Altındağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>461,
            'id'=>2120,
            'semt_ad'=>'Çamdibi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>461,
            'id'=>2121,
            'semt_ad'=>'Kazımdirik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>461,
            'id'=>2122,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>462,
            'id'=>2123,
            'semt_ad'=>'İşçievleri'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>462,
            'id'=>2124,
            'semt_ad'=>'Şirinyer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>462,
            'id'=>2125,
            'semt_ad'=>'Buca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>462,
            'id'=>2126,
            'semt_ad'=>'Kaynaklar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>462,
            'id'=>2127,
            'semt_ad'=>'Harmandalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>462,
            'id'=>2128,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>465,
            'id'=>2129,
            'semt_ad'=>'Egekent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>465,
            'id'=>2130,
            'semt_ad'=>'Balatçık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>465,
            'id'=>2131,
            'semt_ad'=>'İstasyonaltı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>465,
            'id'=>2132,
            'semt_ad'=>'Büyükçiğli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>465,
            'id'=>2133,
            'semt_ad'=>'Sasalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>467,
            'id'=>2134,
            'semt_ad'=>'Foça'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>467,
            'id'=>2135,
            'semt_ad'=>'Bağarası'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>467,
            'id'=>2136,
            'semt_ad'=>'Gerenköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>467,
            'id'=>2137,
            'semt_ad'=>'Yenifoça'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>467,
            'id'=>2138,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>468,
            'id'=>2139,
            'semt_ad'=>'Gaziemir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>468,
            'id'=>2140,
            'semt_ad'=>'Sarnıç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>469,
            'id'=>2141,
            'semt_ad'=>'Güzelbahçe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>469,
            'id'=>2142,
            'semt_ad'=>'Yelki'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>469,
            'id'=>2143,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>472,
            'id'=>2144,
            'semt_ad'=>'İmbatlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>472,
            'id'=>2145,
            'semt_ad'=>'Karşıyaka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>472,
            'id'=>2146,
            'semt_ad'=>'Denizbostanlısı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>472,
            'id'=>2147,
            'semt_ad'=>'Yalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>472,
            'id'=>2148,
            'semt_ad'=>'Nergiz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>472,
            'id'=>2149,
            'semt_ad'=>'Cumhuriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>472,
            'id'=>2150,
            'semt_ad'=>'Alaybey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>472,
            'id'=>2151,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>473,
            'id'=>2152,
            'semt_ad'=>'Kemalpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>473,
            'id'=>2153,
            'semt_ad'=>'Armutlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>473,
            'id'=>2154,
            'semt_ad'=>'Bağyurdu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>473,
            'id'=>2155,
            'semt_ad'=>'Ören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>473,
            'id'=>2156,
            'semt_ad'=>'Ulucak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>473,
            'id'=>2157,
            'semt_ad'=>'Yukarıkızılca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>473,
            'id'=>2158,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>476,
            'id'=>2159,
            'semt_ad'=>'Yenişehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>476,
            'id'=>2160,
            'semt_ad'=>'Gürçeşme'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>476,
            'id'=>2161,
            'semt_ad'=>'Gültepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>476,
            'id'=>2162,
            'semt_ad'=>'Pasaport'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>476,
            'id'=>2163,
            'semt_ad'=>'Alsancak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>476,
            'id'=>2164,
            'semt_ad'=>'Kahramanlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>476,
            'id'=>2165,
            'semt_ad'=>'Basmane'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>476,
            'id'=>2166,
            'semt_ad'=>'Kemeraltı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>476,
            'id'=>2167,
            'semt_ad'=>'Konak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>476,
            'id'=>2168,
            'semt_ad'=>'Eşrefpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>476,
            'id'=>2169,
            'semt_ad'=>'Küçükyalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>476,
            'id'=>2170,
            'semt_ad'=>'Güzelyalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>476,
            'id'=>2171,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>463,
            'id'=>2172,
            'semt_ad'=>'Menderes'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>463,
            'id'=>2173,
            'semt_ad'=>'Değirmendere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>463,
            'id'=>2174,
            'semt_ad'=>'Görece'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>463,
            'id'=>2175,
            'semt_ad'=>'Gümüldür'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>463,
            'id'=>2176,
            'semt_ad'=>'Oğlananası'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>463,
            'id'=>2177,
            'semt_ad'=>'Özdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>463,
            'id'=>2178,
            'semt_ad'=>'Tekeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>463,
            'id'=>2179,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>477,
            'id'=>2180,
            'semt_ad'=>'Menemen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>477,
            'id'=>2181,
            'semt_ad'=>'Asarlık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>477,
            'id'=>2182,
            'semt_ad'=>'Emiralem'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>477,
            'id'=>2183,
            'semt_ad'=>'Koyundere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>477,
            'id'=>2184,
            'semt_ad'=>'Maltepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>477,
            'id'=>2185,
            'semt_ad'=>'Seyrek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>477,
            'id'=>2186,
            'semt_ad'=>'Türkelli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>477,
            'id'=>2187,
            'semt_ad'=>'Ulukent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>477,
            'id'=>2188,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>478,
            'id'=>2189,
            'semt_ad'=>'Narlıdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>480,
            'id'=>2190,
            'semt_ad'=>'Seferihisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>480,
            'id'=>2191,
            'semt_ad'=>'Doğanbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>480,
            'id'=>2192,
            'semt_ad'=>'Ürkmez'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>480,
            'id'=>2193,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>481,
            'id'=>2194,
            'semt_ad'=>'Selçuk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>481,
            'id'=>2195,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>481,
            'id'=>2196,
            'semt_ad'=>'Belevi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>483,
            'id'=>2197,
            'semt_ad'=>'Torbalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>483,
            'id'=>2198,
            'semt_ad'=>'Ayrancılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>483,
            'id'=>2199,
            'semt_ad'=>'Çaybaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>483,
            'id'=>2200,
            'semt_ad'=>'Karakuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>483,
            'id'=>2201,
            'semt_ad'=>'Pancar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>483,
            'id'=>2202,
            'semt_ad'=>'Subaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>483,
            'id'=>2203,
            'semt_ad'=>'Yazıbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>483,
            'id'=>2204,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>484,
            'id'=>2205,
            'semt_ad'=>'Urla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>484,
            'id'=>2206,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>458,
            'id'=>2207,
            'semt_ad'=>'Bayraklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>458,
            'id'=>2208,
            'semt_ad'=>'Alpaslan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>458,
            'id'=>2209,
            'semt_ad'=>'Gümüşpala'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>458,
            'id'=>2210,
            'semt_ad'=>'Soğukkuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>458,
            'id'=>2211,
            'semt_ad'=>'Manavkuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>470,
            'id'=>2212,
            'semt_ad'=>'Karabağlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>470,
            'id'=>2213,
            'semt_ad'=>'Kibar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>470,
            'id'=>2214,
            'semt_ad'=>'Günaltay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>470,
            'id'=>2215,
            'semt_ad'=>'Fahrettinaltay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>470,
            'id'=>2216,
            'semt_ad'=>'Hatay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>470,
            'id'=>2217,
            'semt_ad'=>'Yeşilyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>470,
            'id'=>2218,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>459,
            'id'=>2219,
            'semt_ad'=>'Bergama'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>459,
            'id'=>2220,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>459,
            'id'=>2221,
            'semt_ad'=>'Göçbeyli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>459,
            'id'=>2222,
            'semt_ad'=>'Bölcek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>459,
            'id'=>2223,
            'semt_ad'=>'Yukarıbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>459,
            'id'=>2224,
            'semt_ad'=>'Zeytindağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>460,
            'id'=>2225,
            'semt_ad'=>'Beydağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>460,
            'id'=>2226,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>464,
            'id'=>2227,
            'semt_ad'=>'Çeşme'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>464,
            'id'=>2228,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>464,
            'id'=>2229,
            'semt_ad'=>'Alaçatı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>466,
            'id'=>2230,
            'semt_ad'=>'Dikili'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>466,
            'id'=>2231,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>466,
            'id'=>2232,
            'semt_ad'=>'Çandarlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>471,
            'id'=>2233,
            'semt_ad'=>'Karaburun'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>471,
            'id'=>2234,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>471,
            'id'=>2235,
            'semt_ad'=>'Mordoğan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>474,
            'id'=>2236,
            'semt_ad'=>'Kınık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>474,
            'id'=>2237,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>474,
            'id'=>2238,
            'semt_ad'=>'Poyracık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>474,
            'id'=>2239,
            'semt_ad'=>'Yayakent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>475,
            'id'=>2240,
            'semt_ad'=>'Kiraz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>475,
            'id'=>2241,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>479,
            'id'=>2242,
            'semt_ad'=>'Ödemiş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>479,
            'id'=>2243,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>479,
            'id'=>2244,
            'semt_ad'=>'Bademli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>479,
            'id'=>2245,
            'semt_ad'=>'Birgi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>479,
            'id'=>2246,
            'semt_ad'=>'Zeytinlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>479,
            'id'=>2247,
            'semt_ad'=>'Kaymakçı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>479,
            'id'=>2248,
            'semt_ad'=>'Konaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>479,
            'id'=>2249,
            'semt_ad'=>'Ovakent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>482,
            'id'=>2250,
            'semt_ad'=>'Tire'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>482,
            'id'=>2251,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>482,
            'id'=>2252,
            'semt_ad'=>'Gökçen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>489,
            'id'=>2253,
            'semt_ad'=>'Sukapı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>489,
            'id'=>2254,
            'semt_ad'=>'Ortakapı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>489,
            'id'=>2255,
            'semt_ad'=>'Yenişehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>489,
            'id'=>2256,
            'semt_ad'=>'Bülbül'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>489,
            'id'=>2257,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>485,
            'id'=>2258,
            'semt_ad'=>'Akyaka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>485,
            'id'=>2259,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>486,
            'id'=>2260,
            'semt_ad'=>'Arpaçay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>486,
            'id'=>2261,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>487,
            'id'=>2262,
            'semt_ad'=>'Digor'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>487,
            'id'=>2263,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>487,
            'id'=>2264,
            'semt_ad'=>'Dağpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>488,
            'id'=>2265,
            'semt_ad'=>'Kağızman'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>488,
            'id'=>2266,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>490,
            'id'=>2267,
            'semt_ad'=>'Sarıkamış'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>490,
            'id'=>2268,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>490,
            'id'=>2269,
            'semt_ad'=>'Karaurgan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>491,
            'id'=>2270,
            'semt_ad'=>'Selim'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>491,
            'id'=>2271,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>492,
            'id'=>2272,
            'semt_ad'=>'Susuz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>492,
            'id'=>2273,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>506,
            'id'=>2274,
            'semt_ad'=>'Akmescit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>506,
            'id'=>2275,
            'semt_ad'=>'Kuzeykent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>506,
            'id'=>2276,
            'semt_ad'=>'Cebrail'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>506,
            'id'=>2277,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>506,
            'id'=>2278,
            'semt_ad'=>'Akkaya(Yaka)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>506,
            'id'=>2279,
            'semt_ad'=>'Kuzyaka (Kürdeşe)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>493,
            'id'=>2280,
            'semt_ad'=>'Abana'
        ] );

        App\Models\firma\semtler::create( [
            'ilce_id'=>493,
            'id'=>2281,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>494,
            'id'=>2282,
            'semt_ad'=>'Ağlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>494,
            'id'=>2283,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>495,
            'id'=>2284,
            'semt_ad'=>'Araç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>495,
            'id'=>2285,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>495,
            'id'=>2286,
            'semt_ad'=>'Boyalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>495,
            'id'=>2287,
            'semt_ad'=>'İğdir (Samatlar)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>496,
            'id'=>2288,
            'semt_ad'=>'Azdavay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>496,
            'id'=>2289,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>497,
            'id'=>2290,
            'semt_ad'=>'Bozkurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>497,
            'id'=>2291,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>498,
            'id'=>2292,
            'semt_ad'=>'Cide'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>498,
            'id'=>2293,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>499,
            'id'=>2294,
            'semt_ad'=>'Çatalzeytin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>499,
            'id'=>2295,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>500,
            'id'=>2296,
            'semt_ad'=>'Daday'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>500,
            'id'=>2297,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>501,
            'id'=>2298,
            'semt_ad'=>'Devrekani'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>501,
            'id'=>2299,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>502,
            'id'=>2300,
            'semt_ad'=>'Doğanyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>502,
            'id'=>2301,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>503,
            'id'=>2302,
            'semt_ad'=>'Hanönü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>503,
            'id'=>2303,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>504,
            'id'=>2304,
            'semt_ad'=>'İhsangazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>504,
            'id'=>2305,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>505,
            'id'=>2306,
            'semt_ad'=>'İnebolu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>505,
            'id'=>2307,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>507,
            'id'=>2308,
            'semt_ad'=>'Küre'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>507,
            'id'=>2309,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>508,
            'id'=>2310,
            'semt_ad'=>'Pınarbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>508,
            'id'=>2311,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>509,
            'id'=>2312,
            'semt_ad'=>'Seydiler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>509,
            'id'=>2313,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>510,
            'id'=>2314,
            'semt_ad'=>'Şenpazar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>510,
            'id'=>2315,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>511,
            'id'=>2316,
            'semt_ad'=>'Taşköprü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>511,
            'id'=>2317,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>512,
            'id'=>2318,
            'semt_ad'=>'Tosya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>512,
            'id'=>2319,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>519,
            'id'=>2320,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>519,
            'id'=>2321,
            'semt_ad'=>'Fevziçakmak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>519,
            'id'=>2322,
            'semt_ad'=>'Yenişehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>519,
            'id'=>2323,
            'semt_ad'=>'Yenimahalle'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>519,
            'id'=>2324,
            'semt_ad'=>'Argıncık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>519,
            'id'=>2325,
            'semt_ad'=>'İldem/Beyazşehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>519,
            'id'=>2326,
            'semt_ad'=>'Ebiç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>519,
            'id'=>2327,
            'semt_ad'=>'Erkilet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>519,
            'id'=>2328,
            'semt_ad'=>'Güneşli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>519,
            'id'=>2329,
            'semt_ad'=>'Kuşçu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>519,
            'id'=>2330,
            'semt_ad'=>'Mahzemin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>519,
            'id'=>2331,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>519,
            'id'=>2332,
            'semt_ad'=>'Yemliha'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>520,
            'id'=>2333,
            'semt_ad'=>'Kılıçaslan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>520,
            'id'=>2334,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>520,
            'id'=>2335,
            'semt_ad'=>'Hürriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>520,
            'id'=>2336,
            'semt_ad'=>'Kazımkarabekir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>520,
            'id'=>2337,
            'semt_ad'=>'Şeker/Keykubat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>520,
            'id'=>2338,
            'semt_ad'=>'Becen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>520,
            'id'=>2339,
            'semt_ad'=>'Gesi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>520,
            'id'=>2340,
            'semt_ad'=>'Gürpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>520,
            'id'=>2341,
            'semt_ad'=>'Hisarcık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>520,
            'id'=>2342,
            'semt_ad'=>'Kıranardı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>520,
            'id'=>2343,
            'semt_ad'=>'Mimarsinan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>520,
            'id'=>2344,
            'semt_ad'=>'Turan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>520,
            'id'=>2345,
            'semt_ad'=>'Büyükbürüngüz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>520,
            'id'=>2346,
            'semt_ad'=>'Argırnas'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>525,
            'id'=>2347,
            'semt_ad'=>'Talas'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>525,
            'id'=>2348,
            'semt_ad'=>'Başakpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>525,
            'id'=>2349,
            'semt_ad'=>'Erciyes'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>525,
            'id'=>2350,
            'semt_ad'=>'Kepez'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>525,
            'id'=>2351,
            'semt_ad'=>'Kuruköprü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>525,
            'id'=>2352,
            'semt_ad'=>'Zincidere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>525,
            'id'=>2353,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>513,
            'id'=>2354,
            'semt_ad'=>'Akkışla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>513,
            'id'=>2355,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>514,
            'id'=>2356,
            'semt_ad'=>'Bünyan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>514,
            'id'=>2357,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>514,
            'id'=>2358,
            'semt_ad'=>'Akmescit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>514,
            'id'=>2359,
            'semt_ad'=>'Güllüce'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>514,
            'id'=>2360,
            'semt_ad'=>'Karakaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>515,
            'id'=>2361,
            'semt_ad'=>'Develi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>515,
            'id'=>2362,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>515,
            'id'=>2363,
            'semt_ad'=>'Sindelhöyük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>515,
            'id'=>2364,
            'semt_ad'=>'Taşçı (Bakırdağ)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>516,
            'id'=>2365,
            'semt_ad'=>'Felahiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>516,
            'id'=>2366,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>517,
            'id'=>2367,
            'semt_ad'=>'Hacılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>518,
            'id'=>2368,
            'semt_ad'=>'İncesu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>518,
            'id'=>2369,
            'semt_ad'=>'Kızılören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>518,
            'id'=>2370,
            'semt_ad'=>'Süksün'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>518,
            'id'=>2371,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>521,
            'id'=>2372,
            'semt_ad'=>'Özvatan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>521,
            'id'=>2373,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>522,
            'id'=>2374,
            'semt_ad'=>'Pınarbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>522,
            'id'=>2375,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>522,
            'id'=>2376,
            'semt_ad'=>'Örenşehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>523,
            'id'=>2377,
            'semt_ad'=>'Sarıoğlan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>523,
            'id'=>2378,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>523,
            'id'=>2379,
            'semt_ad'=>'Çiftlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>523,
            'id'=>2380,
            'semt_ad'=>'Gölova( Palas)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>524,
            'id'=>2381,
            'semt_ad'=>'Sarız'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>524,
            'id'=>2382,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>526,
            'id'=>2383,
            'semt_ad'=>'Tomarza'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>526,
            'id'=>2384,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>526,
            'id'=>2385,
            'semt_ad'=>'Toklar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>526,
            'id'=>2386,
            'semt_ad'=>'Dadaloğlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>527,
            'id'=>2387,
            'semt_ad'=>'Yahyalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>527,
            'id'=>2388,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>527,
            'id'=>2389,
            'semt_ad'=>'Derebağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>528,
            'id'=>2390,
            'semt_ad'=>'Yeşilhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>528,
            'id'=>2391,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>531,
            'id'=>2392,
            'semt_ad'=>'Bademlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>531,
            'id'=>2393,
            'semt_ad'=>'Kocahıdır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>531,
            'id'=>2394,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>531,
            'id'=>2395,
            'semt_ad'=>'Kavaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>531,
            'id'=>2396,
            'semt_ad'=>'Yoğuntaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>531,
            'id'=>2397,
            'semt_ad'=>'İnece'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>531,
            'id'=>2398,
            'semt_ad'=>'Üsküp'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>529,
            'id'=>2399,
            'semt_ad'=>'Babaeski'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>529,
            'id'=>2400,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>529,
            'id'=>2401,
            'semt_ad'=>'Alpullu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>529,
            'id'=>2402,
            'semt_ad'=>'Büyükmandıra'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>530,
            'id'=>2403,
            'semt_ad'=>'Demirköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>530,
            'id'=>2404,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>530,
            'id'=>2405,
            'semt_ad'=>'İğneada'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>532,
            'id'=>2406,
            'semt_ad'=>'Kofçaz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>532,
            'id'=>2407,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>533,
            'id'=>2408,
            'semt_ad'=>'Cumhuriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>533,
            'id'=>2409,
            'semt_ad'=>'Hürriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>533,
            'id'=>2410,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>533,
            'id'=>2411,
            'semt_ad'=>'Büyükkarıştıran'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>533,
            'id'=>2412,
            'semt_ad'=>'Ahmetbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>533,
            'id'=>2413,
            'semt_ad'=>'Evrensekiz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>533,
            'id'=>2414,
            'semt_ad'=>'Kırıkköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>534,
            'id'=>2415,
            'semt_ad'=>'Pehlivanköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>534,
            'id'=>2416,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>535,
            'id'=>2417,
            'semt_ad'=>'Pınarhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>535,
            'id'=>2418,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>535,
            'id'=>2419,
            'semt_ad'=>'Kaynarca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>536,
            'id'=>2420,
            'semt_ad'=>'Vize'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>536,
            'id'=>2421,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>536,
            'id'=>2422,
            'semt_ad'=>'Çakılı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>536,
            'id'=>2423,
            'semt_ad'=>'Kıyıköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>536,
            'id'=>2424,
            'semt_ad'=>'Sergen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>542,
            'id'=>2425,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>542,
            'id'=>2426,
            'semt_ad'=>'Hükümet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>542,
            'id'=>2427,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>542,
            'id'=>2428,
            'semt_ad'=>'Özbağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>542,
            'id'=>2429,
            'semt_ad'=>'Göllü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>537,
            'id'=>2430,
            'semt_ad'=>'Akçakent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>537,
            'id'=>2431,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>537,
            'id'=>2432,
            'semt_ad'=>'Kösefakılı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>538,
            'id'=>2433,
            'semt_ad'=>'Akpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>538,
            'id'=>2434,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>539,
            'id'=>2435,
            'semt_ad'=>'Boztepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>539,
            'id'=>2436,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>540,
            'id'=>2437,
            'semt_ad'=>'Çiçekdağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>540,
            'id'=>2438,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>540,
            'id'=>2439,
            'semt_ad'=>'Köseli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>541,
            'id'=>2440,
            'semt_ad'=>'Kaman'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>541,
            'id'=>2441,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>541,
            'id'=>2442,
            'semt_ad'=>'Demirli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>541,
            'id'=>2443,
            'semt_ad'=>'Kurancılı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>543,
            'id'=>2444,
            'semt_ad'=>'Mucur'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>543,
            'id'=>2445,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>551,
            'id'=>2446,
            'semt_ad'=>'Yahyakaptan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>551,
            'id'=>2447,
            'semt_ad'=>'Yenişehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>551,
            'id'=>2448,
            'semt_ad'=>'Malta'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>551,
            'id'=>2449,
            'semt_ad'=>'Zabitan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>551,
            'id'=>2450,
            'semt_ad'=>'Tepecik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>551,
            'id'=>2451,
            'semt_ad'=>'Cedit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>551,
            'id'=>2452,
            'semt_ad'=>'Vezirçiftliği'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>551,
            'id'=>2453,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>551,
            'id'=>2454,
            'semt_ad'=>'Alikahya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>544,
            'id'=>2455,
            'semt_ad'=>'Karşıyaka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>544,
            'id'=>2456,
            'semt_ad'=>'Bahçecik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>544,
            'id'=>2457,
            'semt_ad'=>'Kullar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>544,
            'id'=>2458,
            'semt_ad'=>'Yeniköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>544,
            'id'=>2459,
            'semt_ad'=>'Yuvacık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>544,
            'id'=>2460,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>545,
            'id'=>2461,
            'semt_ad'=>'Çayırova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>545,
            'id'=>2462,
            'semt_ad'=>'Şekerpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>546,
            'id'=>2463,
            'semt_ad'=>'Darıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>546,
            'id'=>2464,
            'semt_ad'=>'Sırasöğütler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>548,
            'id'=>2465,
            'semt_ad'=>'Dilovası'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>548,
            'id'=>2466,
            'semt_ad'=>'Tavşancıl'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>548,
            'id'=>2467,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>554,
            'id'=>2468,
            'semt_ad'=>'Köseköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>554,
            'id'=>2469,
            'semt_ad'=>'Maşukiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>554,
            'id'=>2470,
            'semt_ad'=>'Suadiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>554,
            'id'=>2471,
            'semt_ad'=>'Uzunçiftlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>554,
            'id'=>2472,
            'semt_ad'=>'Uzuntarla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>554,
            'id'=>2473,
            'semt_ad'=>'Büyükderbent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>554,
            'id'=>2474,
            'semt_ad'=>'Eşme'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>554,
            'id'=>2475,
            'semt_ad'=>'Acısu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>554,
            'id'=>2476,
            'semt_ad'=>'Sarımeşe(Akmeşe)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>554,
            'id'=>2477,
            'semt_ad'=>'Arslanbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>554,
            'id'=>2478,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>549,
            'id'=>2479,
            'semt_ad'=>'Gebze'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>549,
            'id'=>2480,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>549,
            'id'=>2481,
            'semt_ad'=>'Güzeltepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>550,
            'id'=>2482,
            'semt_ad'=>'Gölcük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>550,
            'id'=>2483,
            'semt_ad'=>'İhsaniye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>550,
            'id'=>2484,
            'semt_ad'=>'Değirmendere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>550,
            'id'=>2485,
            'semt_ad'=>'Halıdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>550,
            'id'=>2486,
            'semt_ad'=>'Ulaşlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>550,
            'id'=>2487,
            'semt_ad'=>'Yazlık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>550,
            'id'=>2488,
            'semt_ad'=>'Hisareyn'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>550,
            'id'=>2489,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>552,
            'id'=>2490,
            'semt_ad'=>'Kandıra'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>552,
            'id'=>2491,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>553,
            'id'=>2492,
            'semt_ad'=>'Karamürsel'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>553,
            'id'=>2493,
            'semt_ad'=>'Ereğli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>553,
            'id'=>2494,
            'semt_ad'=>'Yalakdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>553,
            'id'=>2495,
            'semt_ad'=>'Kızderbent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>553,
            'id'=>2496,
            'semt_ad'=>'Dereköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>553,
            'id'=>2497,
            'semt_ad'=>'Akçat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>553,
            'id'=>2498,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>555,
            'id'=>2499,
            'semt_ad'=>'Körfez'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>555,
            'id'=>2500,
            'semt_ad'=>'Hereke'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>555,
            'id'=>2501,
            'semt_ad'=>'Kirazlıyalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>555,
            'id'=>2502,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>555,
            'id'=>2503,
            'semt_ad'=>'Yarımca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>547,
            'id'=>2504,
            'semt_ad'=>'Derince'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>547,
            'id'=>2505,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>577,
            'id'=>2506,
            'semt_ad'=>'Selimiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>577,
            'id'=>2507,
            'semt_ad'=>'Mevlana'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>577,
            'id'=>2508,
            'semt_ad'=>'Şems'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>577,
            'id'=>2509,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>577,
            'id'=>2510,
            'semt_ad'=>'İsmil'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>577,
            'id'=>2511,
            'semt_ad'=>'Ovakavağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>579,
            'id'=>2512,
            'semt_ad'=>'Aziziye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>579,
            'id'=>2513,
            'semt_ad'=>'Zafer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>579,
            'id'=>2514,
            'semt_ad'=>'Taşcami'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>579,
            'id'=>2515,
            'semt_ad'=>'Selimiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>579,
            'id'=>2516,
            'semt_ad'=>'Dere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>579,
            'id'=>2517,
            'semt_ad'=>'Mimarsinan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>579,
            'id'=>2518,
            'semt_ad'=>'Meram'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>579,
            'id'=>2519,
            'semt_ad'=>'Çarıklar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>579,
            'id'=>2520,
            'semt_ad'=>'Karadiğin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>579,
            'id'=>2521,
            'semt_ad'=>'Kaşınhanı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>579,
            'id'=>2522,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>581,
            'id'=>2523,
            'semt_ad'=>'Zafer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>581,
            'id'=>2524,
            'semt_ad'=>'Sille'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>581,
            'id'=>2525,
            'semt_ad'=>'Şems'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>581,
            'id'=>2526,
            'semt_ad'=>'Nalçacı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>581,
            'id'=>2527,
            'semt_ad'=>'Fatih'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>581,
            'id'=>2528,
            'semt_ad'=>'Cumhuriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>581,
            'id'=>2529,
            'semt_ad'=>'Aydınlık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>581,
            'id'=>2530,
            'semt_ad'=>'Hocacihan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>581,
            'id'=>2531,
            'semt_ad'=>'Bosna'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>581,
            'id'=>2532,
            'semt_ad'=>'Yükselen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>581,
            'id'=>2533,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>581,
            'id'=>2534,
            'semt_ad'=>'Tepeköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>556,
            'id'=>2535,
            'semt_ad'=>'Ahırlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>556,
            'id'=>2536,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>556,
            'id'=>2537,
            'semt_ad'=>'Akkise'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>557,
            'id'=>2538,
            'semt_ad'=>'Akören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>557,
            'id'=>2539,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>558,
            'id'=>2540,
            'semt_ad'=>'İstasyon'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>558,
            'id'=>2541,
            'semt_ad'=>'Kuruçay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>558,
            'id'=>2542,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>558,
            'id'=>2543,
            'semt_ad'=>'Altuntaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>558,
            'id'=>2544,
            'semt_ad'=>'Doğrugöz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>558,
            'id'=>2545,
            'semt_ad'=>'Çakıllar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>558,
            'id'=>2546,
            'semt_ad'=>'Adsız'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>558,
            'id'=>2547,
            'semt_ad'=>'Karahüyük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>558,
            'id'=>2548,
            'semt_ad'=>'Ortaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>559,
            'id'=>2549,
            'semt_ad'=>'Altınekin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>559,
            'id'=>2550,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>560,
            'id'=>2551,
            'semt_ad'=>'Beyşehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>560,
            'id'=>2552,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>560,
            'id'=>2553,
            'semt_ad'=>'Doğanbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>560,
            'id'=>2554,
            'semt_ad'=>'Üzümlü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>560,
            'id'=>2555,
            'semt_ad'=>'Huğlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>560,
            'id'=>2556,
            'semt_ad'=>'Sadıkhacı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>560,
            'id'=>2557,
            'semt_ad'=>'Karaali'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>561,
            'id'=>2558,
            'semt_ad'=>'Bozkır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>561,
            'id'=>2559,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>561,
            'id'=>2560,
            'semt_ad'=>'Sarıoğlan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>562,
            'id'=>2561,
            'semt_ad'=>'Cihanbeyli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>562,
            'id'=>2562,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>562,
            'id'=>2563,
            'semt_ad'=>'Gölyazı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>562,
            'id'=>2564,
            'semt_ad'=>'Karabağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>562,
            'id'=>2565,
            'semt_ad'=>'Taşpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>562,
            'id'=>2566,
            'semt_ad'=>'Yeniceoba'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>562,
            'id'=>2567,
            'semt_ad'=>'Bulduk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>562,
            'id'=>2568,
            'semt_ad'=>'Kuşça'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>562,
            'id'=>2569,
            'semt_ad'=>'Gezen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>562,
            'id'=>2570,
            'semt_ad'=>'Kütükkuşagı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>563,
            'id'=>2571,
            'semt_ad'=>'Çeltik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>563,
            'id'=>2572,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>563,
            'id'=>2573,
            'semt_ad'=>'Gökpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>564,
            'id'=>2574,
            'semt_ad'=>'Çumra'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>564,
            'id'=>2575,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>564,
            'id'=>2576,
            'semt_ad'=>'Alibeyhüyüğü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>564,
            'id'=>2577,
            'semt_ad'=>'İçeriçumra'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>564,
            'id'=>2578,
            'semt_ad'=>'Karkın'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>564,
            'id'=>2579,
            'semt_ad'=>'Okçu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>565,
            'id'=>2580,
            'semt_ad'=>'Derbent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>565,
            'id'=>2581,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>566,
            'id'=>2582,
            'semt_ad'=>'Derebucak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>566,
            'id'=>2583,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>566,
            'id'=>2584,
            'semt_ad'=>'Çamlık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>567,
            'id'=>2585,
            'semt_ad'=>'Doğanhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>567,
            'id'=>2586,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>568,
            'id'=>2587,
            'semt_ad'=>'Emirgazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>568,
            'id'=>2588,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>568,
            'id'=>2589,
            'semt_ad'=>'Demirci'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>569,
            'id'=>2590,
            'semt_ad'=>'500 Evler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>569,
            'id'=>2591,
            'semt_ad'=>'Aydınlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>569,
            'id'=>2592,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>569,
            'id'=>2593,
            'semt_ad'=>'Belkaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>569,
            'id'=>2594,
            'semt_ad'=>'Aziziye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>569,
            'id'=>2595,
            'semt_ad'=>'Çayhan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>569,
            'id'=>2596,
            'semt_ad'=>'Zengen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>570,
            'id'=>2597,
            'semt_ad'=>'Güneysınır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>570,
            'id'=>2598,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>571,
            'id'=>2599,
            'semt_ad'=>'Hadim'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>571,
            'id'=>2600,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>571,
            'id'=>2601,
            'semt_ad'=>'Dedemli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>571,
            'id'=>2602,
            'semt_ad'=>'Korualan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>572,
            'id'=>2603,
            'semt_ad'=>'Halkapınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>572,
            'id'=>2604,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>573,
            'id'=>2605,
            'semt_ad'=>'Hüyük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>573,
            'id'=>2606,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>573,
            'id'=>2607,
            'semt_ad'=>'Selki'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>574,
            'id'=>2608,
            'semt_ad'=>'Ilgın'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>574,
            'id'=>2609,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>574,
            'id'=>2610,
            'semt_ad'=>'Argıthanı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>574,
            'id'=>2611,
            'semt_ad'=>'Aşağıçiğil'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>574,
            'id'=>2612,
            'semt_ad'=>'Yukarıçiğil'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>575,
            'id'=>2613,
            'semt_ad'=>'Kadınhanı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>575,
            'id'=>2614,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>575,
            'id'=>2615,
            'semt_ad'=>'Osmancık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>575,
            'id'=>2616,
            'semt_ad'=>'Atkantı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>575,
            'id'=>2617,
            'semt_ad'=>'Kolukısa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>576,
            'id'=>2618,
            'semt_ad'=>'Karapınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>576,
            'id'=>2619,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>576,
            'id'=>2620,
            'semt_ad'=>'Yeşilyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>576,
            'id'=>2621,
            'semt_ad'=>'İslik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>576,
            'id'=>2622,
            'semt_ad'=>'Hotamış'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>576,
            'id'=>2623,
            'semt_ad'=>'Kayalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>578,
            'id'=>2624,
            'semt_ad'=>'Kulu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>578,
            'id'=>2625,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>578,
            'id'=>2626,
            'semt_ad'=>'Kozanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>578,
            'id'=>2627,
            'semt_ad'=>'Tavşancalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>578,
            'id'=>2628,
            'semt_ad'=>'Zincirlikuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>580,
            'id'=>2629,
            'semt_ad'=>'Sarayönü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>580,
            'id'=>2630,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>580,
            'id'=>2631,
            'semt_ad'=>'Ladik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>582,
            'id'=>2632,
            'semt_ad'=>'Sofuhane'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>582,
            'id'=>2633,
            'semt_ad'=>'Stadyum'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>582,
            'id'=>2634,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>583,
            'id'=>2635,
            'semt_ad'=>'Taşkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>583,
            'id'=>2636,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>583,
            'id'=>2637,
            'semt_ad'=>'Balcılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>584,
            'id'=>2638,
            'semt_ad'=>'Tuzlukçu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>584,
            'id'=>2639,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>585,
            'id'=>2640,
            'semt_ad'=>'Yalıhüyük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>585,
            'id'=>2641,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>586,
            'id'=>2642,
            'semt_ad'=>'Yunak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>586,
            'id'=>2643,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>586,
            'id'=>2644,
            'semt_ad'=>'Kuzören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2645,
            'semt_ad'=>'Alipaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2646,
            'semt_ad'=>'Balıklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2647,
            'semt_ad'=>'Bahçelievler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2648,
            'semt_ad'=>'Börekçiler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2649,
            'semt_ad'=>'Hamidiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2650,
            'semt_ad'=>'Yoncalıkaplıcaları'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2651,
            'semt_ad'=>'Ağaçköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2652,
            'semt_ad'=>'Okçu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2653,
            'semt_ad'=>'İnköyü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2654,
            'semt_ad'=>'Organizesanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2655,
            'semt_ad'=>'Kirazpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2656,
            'semt_ad'=>'Aydoğdu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2657,
            'semt_ad'=>'Hacıazizler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2658,
            'semt_ad'=>'Ilıcakaplıcaları'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2659,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>595,
            'id'=>2660,
            'semt_ad'=>'Seyitömer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>587,
            'id'=>2661,
            'semt_ad'=>'Altıntaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>587,
            'id'=>2662,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>588,
            'id'=>2663,
            'semt_ad'=>'Aslanapa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>588,
            'id'=>2664,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>589,
            'id'=>2665,
            'semt_ad'=>'Çavdarhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>589,
            'id'=>2666,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>590,
            'id'=>2667,
            'semt_ad'=>'Domaniç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>590,
            'id'=>2668,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>590,
            'id'=>2669,
            'semt_ad'=>'Çukurca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>591,
            'id'=>2670,
            'semt_ad'=>'Dumlupınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>591,
            'id'=>2671,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>592,
            'id'=>2672,
            'semt_ad'=>'Emet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>592,
            'id'=>2673,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>593,
            'id'=>2674,
            'semt_ad'=>'Gediz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>593,
            'id'=>2675,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>593,
            'id'=>2676,
            'semt_ad'=>'Eskigediz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>593,
            'id'=>2677,
            'semt_ad'=>'Gökler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>594,
            'id'=>2678,
            'semt_ad'=>'Hisarcık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>594,
            'id'=>2679,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>596,
            'id'=>2680,
            'semt_ad'=>'Pazarlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>596,
            'id'=>2681,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>597,
            'id'=>2682,
            'semt_ad'=>'Simav'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>597,
            'id'=>2683,
            'semt_ad'=>'Muradınlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>597,
            'id'=>2684,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>597,
            'id'=>2685,
            'semt_ad'=>'Beyce'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>597,
            'id'=>2686,
            'semt_ad'=>'Çitgöl'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>597,
            'id'=>2687,
            'semt_ad'=>'Güney'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>597,
            'id'=>2688,
            'semt_ad'=>'Kuşu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>597,
            'id'=>2689,
            'semt_ad'=>'Naşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>597,
            'id'=>2690,
            'semt_ad'=>'Kelemyenice'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>597,
            'id'=>2691,
            'semt_ad'=>'Akdağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>598,
            'id'=>2692,
            'semt_ad'=>'Şaphane'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>598,
            'id'=>2693,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>599,
            'id'=>2694,
            'semt_ad'=>'Tavşanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>599,
            'id'=>2695,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>599,
            'id'=>2696,
            'semt_ad'=>'Çukurköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>599,
            'id'=>2697,
            'semt_ad'=>'Tepecik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>599,
            'id'=>2698,
            'semt_ad'=>'Kuruçay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>599,
            'id'=>2699,
            'semt_ad'=>'Tunçbilek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2700,
            'semt_ad'=>'Mustafapaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2701,
            'semt_ad'=>'Selçuklu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2702,
            'semt_ad'=>'Beylerbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2703,
            'semt_ad'=>'Kaynarca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2704,
            'semt_ad'=>'Yeşiltepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2705,
            'semt_ad'=>'Çilesiz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2706,
            'semt_ad'=>'Hüseyinbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2707,
            'semt_ad'=>'Cevherizade'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2708,
            'semt_ad'=>'Uçbağlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2709,
            'semt_ad'=>'Beydağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2710,
            'semt_ad'=>'Fırat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2711,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2712,
            'semt_ad'=>'Hanımınçiftliği(Orduzu)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2713,
            'semt_ad'=>'Yakınkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2714,
            'semt_ad'=>'Dilek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2715,
            'semt_ad'=>'Konak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>611,
            'id'=>2716,
            'semt_ad'=>'Topsöğüt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>601,
            'id'=>2717,
            'semt_ad'=>'Akçadağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>601,
            'id'=>2718,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>601,
            'id'=>2719,
            'semt_ad'=>'Ören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>601,
            'id'=>2720,
            'semt_ad'=>'Kürecik(Kepez)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>601,
            'id'=>2721,
            'semt_ad'=>'Levent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>601,
            'id'=>2722,
            'semt_ad'=>'Çatyol'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>602,
            'id'=>2723,
            'semt_ad'=>'Arapkir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>602,
            'id'=>2724,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>602,
            'id'=>2725,
            'semt_ad'=>'Taşdelen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>603,
            'id'=>2726,
            'semt_ad'=>'Arguvan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>603,
            'id'=>2727,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>603,
            'id'=>2728,
            'semt_ad'=>'Çobandere(Yoncalı)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>604,
            'id'=>2729,
            'semt_ad'=>'Battalgazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>604,
            'id'=>2730,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>604,
            'id'=>2731,
            'semt_ad'=>'Hatunsuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>605,
            'id'=>2732,
            'semt_ad'=>'Darende'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>605,
            'id'=>2733,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>605,
            'id'=>2734,
            'semt_ad'=>'Ayvalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>605,
            'id'=>2735,
            'semt_ad'=>'Balaban'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>605,
            'id'=>2736,
            'semt_ad'=>'Aşağıulupınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>606,
            'id'=>2737,
            'semt_ad'=>'Doğanşehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>606,
            'id'=>2738,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>606,
            'id'=>2739,
            'semt_ad'=>'Polat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>606,
            'id'=>2740,
            'semt_ad'=>'Sürgü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>606,
            'id'=>2741,
            'semt_ad'=>'Erkenek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>606,
            'id'=>2742,
            'semt_ad'=>'Kurucaova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>606,
            'id'=>2743,
            'semt_ad'=>'Gövdeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>607,
            'id'=>2744,
            'semt_ad'=>'Doğanyol'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>607,
            'id'=>2745,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>608,
            'id'=>2746,
            'semt_ad'=>'Hekimhan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>608,
            'id'=>2747,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>608,
            'id'=>2748,
            'semt_ad'=>'Güzelyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>608,
            'id'=>2749,
            'semt_ad'=>'Kurşunlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>609,
            'id'=>2750,
            'semt_ad'=>'Kale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>609,
            'id'=>2751,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>609,
            'id'=>2752,
            'semt_ad'=>'Bağlıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>610,
            'id'=>2753,
            'semt_ad'=>'Kuluncak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>610,
            'id'=>2754,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>612,
            'id'=>2755,
            'semt_ad'=>'Pötürge'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>612,
            'id'=>2756,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>613,
            'id'=>2757,
            'semt_ad'=>'Yazıhan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>613,
            'id'=>2758,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>613,
            'id'=>2759,
            'semt_ad'=>'Durucasu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>613,
            'id'=>2760,
            'semt_ad'=>'Fethiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>614,
            'id'=>2761,
            'semt_ad'=>'Yeşilyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>614,
            'id'=>2762,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>614,
            'id'=>2763,
            'semt_ad'=>'Yakınca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>614,
            'id'=>2764,
            'semt_ad'=>'Bostanbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>614,
            'id'=>2765,
            'semt_ad'=>'Gündüzbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>624,
            'id'=>2766,
            'semt_ad'=>'Adakale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>624,
            'id'=>2767,
            'semt_ad'=>'Tevfikiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>624,
            'id'=>2768,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>624,
            'id'=>2769,
            'semt_ad'=>'Adnanmenderes'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>624,
            'id'=>2770,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>624,
            'id'=>2771,
            'semt_ad'=>'Aşağıçobanisa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>624,
            'id'=>2772,
            'semt_ad'=>'Karaoğlanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>624,
            'id'=>2773,
            'semt_ad'=>'Muradiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>624,
            'id'=>2774,
            'semt_ad'=>'Karaağaçlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>615,
            'id'=>2775,
            'semt_ad'=>'Ahmetli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>615,
            'id'=>2776,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>616,
            'id'=>2777,
            'semt_ad'=>'Hürriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>616,
            'id'=>2778,
            'semt_ad'=>'İnönü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>616,
            'id'=>2779,
            'semt_ad'=>'Fevzipaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>616,
            'id'=>2780,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>616,
            'id'=>2781,
            'semt_ad'=>'Akselendi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>616,
            'id'=>2782,
            'semt_ad'=>'Beyoba'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>616,
            'id'=>2783,
            'semt_ad'=>'Kayalıoğlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>616,
            'id'=>2784,
            'semt_ad'=>'Mecidiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>616,
            'id'=>2785,
            'semt_ad'=>'Medar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>616,
            'id'=>2786,
            'semt_ad'=>'Süleymanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>616,
            'id'=>2787,
            'semt_ad'=>'Zeytinliova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>616,
            'id'=>2788,
            'semt_ad'=>'Ballıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>616,
            'id'=>2789,
            'semt_ad'=>'Dağdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>617,
            'id'=>2790,
            'semt_ad'=>'Alaşehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>617,
            'id'=>2791,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>617,
            'id'=>2792,
            'semt_ad'=>'Kavaklıdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>617,
            'id'=>2793,
            'semt_ad'=>'Killik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>617,
            'id'=>2794,
            'semt_ad'=>'Uluderbent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>617,
            'id'=>2795,
            'semt_ad'=>'Yeşilyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>618,
            'id'=>2796,
            'semt_ad'=>'Demirci'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>618,
            'id'=>2797,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>618,
            'id'=>2798,
            'semt_ad'=>'Borlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>619,
            'id'=>2799,
            'semt_ad'=>'Gölmarmara'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>619,
            'id'=>2800,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>620,
            'id'=>2801,
            'semt_ad'=>'Gördes'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>620,
            'id'=>2802,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>620,
            'id'=>2803,
            'semt_ad'=>'Güneşli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>621,
            'id'=>2804,
            'semt_ad'=>'Kırkağaç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>621,
            'id'=>2805,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>621,
            'id'=>2806,
            'semt_ad'=>'Bakır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>621,
            'id'=>2807,
            'semt_ad'=>'Karakurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>621,
            'id'=>2808,
            'semt_ad'=>'Gelenbe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>621,
            'id'=>2809,
            'semt_ad'=>'İlyaslar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>622,
            'id'=>2810,
            'semt_ad'=>'Köprübaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>622,
            'id'=>2811,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>623,
            'id'=>2812,
            'semt_ad'=>'Kula'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>623,
            'id'=>2813,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>623,
            'id'=>2814,
            'semt_ad'=>'Gökçeören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>625,
            'id'=>2815,
            'semt_ad'=>'Zafer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>625,
            'id'=>2816,
            'semt_ad'=>'Barış'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>625,
            'id'=>2817,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>625,
            'id'=>2818,
            'semt_ad'=>'Sartmahmut'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>625,
            'id'=>2819,
            'semt_ad'=>'Yılmaz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>625,
            'id'=>2820,
            'semt_ad'=>'Adala'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>625,
            'id'=>2821,
            'semt_ad'=>'Durasıllı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>625,
            'id'=>2822,
            'semt_ad'=>'Gökeyüp'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>625,
            'id'=>2823,
            'semt_ad'=>'Taytan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>626,
            'id'=>2824,
            'semt_ad'=>'Sarıgöl'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>626,
            'id'=>2825,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>627,
            'id'=>2826,
            'semt_ad'=>'Saruhanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>627,
            'id'=>2827,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>627,
            'id'=>2828,
            'semt_ad'=>'Dilek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>627,
            'id'=>2829,
            'semt_ad'=>'Hacırahmanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>627,
            'id'=>2830,
            'semt_ad'=>'Koldere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>627,
            'id'=>2831,
            'semt_ad'=>'Mütevelli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>627,
            'id'=>2832,
            'semt_ad'=>'Paşaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>627,
            'id'=>2833,
            'semt_ad'=>'Halitpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>627,
            'id'=>2834,
            'semt_ad'=>'Büyükbelen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>628,
            'id'=>2835,
            'semt_ad'=>'Selendi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>628,
            'id'=>2836,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>629,
            'id'=>2837,
            'semt_ad'=>'Soma'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>629,
            'id'=>2838,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>629,
            'id'=>2839,
            'semt_ad'=>'Turgutalp'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>629,
            'id'=>2840,
            'semt_ad'=>'Avdan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>629,
            'id'=>2841,
            'semt_ad'=>'Cenkyeri'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>630,
            'id'=>2842,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>630,
            'id'=>2843,
            'semt_ad'=>'Ergenekon'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>630,
            'id'=>2844,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>630,
            'id'=>2845,
            'semt_ad'=>'Derbent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>630,
            'id'=>2846,
            'semt_ad'=>'Urganlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2847,
            'semt_ad'=>'İsmetpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2848,
            'semt_ad'=>'Gazipaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2849,
            'semt_ad'=>'Hayrullah'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2850,
            'semt_ad'=>'Mağralı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2851,
            'semt_ad'=>'Yenişehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2852,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2853,
            'semt_ad'=>'Fatmalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2854,
            'semt_ad'=>'Önsen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2855,
            'semt_ad'=>'Alibeyli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2856,
            'semt_ad'=>'Süleymanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2857,
            'semt_ad'=>'Ilıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2858,
            'semt_ad'=>'Yeniköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2859,
            'semt_ad'=>'Kale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2860,
            'semt_ad'=>'Karacasu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2861,
            'semt_ad'=>'Kavlaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2862,
            'semt_ad'=>'Kürtül'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2863,
            'semt_ad'=>'Tekir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2864,
            'semt_ad'=>'Baydemirli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2865,
            'semt_ad'=>'Şahinkayası'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>637,
            'id'=>2866,
            'semt_ad'=>'Döngele'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>631,
            'id'=>2867,
            'semt_ad'=>'Afşin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>631,
            'id'=>2868,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>631,
            'id'=>2869,
            'semt_ad'=>'Arıtaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>631,
            'id'=>2870,
            'semt_ad'=>'Çobanbeyli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>631,
            'id'=>2871,
            'semt_ad'=>'Çoğulhan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>631,
            'id'=>2872,
            'semt_ad'=>'Tanır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>631,
            'id'=>2873,
            'semt_ad'=>'Altınelma'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>631,
            'id'=>2874,
            'semt_ad'=>'Büyüktatlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>632,
            'id'=>2875,
            'semt_ad'=>'Andırın'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>632,
            'id'=>2876,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>632,
            'id'=>2877,
            'semt_ad'=>'Geben'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>632,
            'id'=>2878,
            'semt_ad'=>'Yeşilova(Tokmaklı)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>632,
            'id'=>2879,
            'semt_ad'=>'Çokak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>633,
            'id'=>2880,
            'semt_ad'=>'Çağlayancerit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>633,
            'id'=>2881,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>633,
            'id'=>2882,
            'semt_ad'=>'Düzbağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>633,
            'id'=>2883,
            'semt_ad'=>'Bozlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>634,
            'id'=>2884,
            'semt_ad'=>'Ekinözü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>634,
            'id'=>2885,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>635,
            'id'=>2886,
            'semt_ad'=>'Elbistan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>635,
            'id'=>2887,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>635,
            'id'=>2888,
            'semt_ad'=>'Büyükyapalak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>635,
            'id'=>2889,
            'semt_ad'=>'Gücük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>635,
            'id'=>2890,
            'semt_ad'=>'İğdeköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>635,
            'id'=>2891,
            'semt_ad'=>'Demircilik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>635,
            'id'=>2892,
            'semt_ad'=>'Doğanköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>635,
            'id'=>2893,
            'semt_ad'=>'Izgın'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>635,
            'id'=>2894,
            'semt_ad'=>'Karaelbistan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>635,
            'id'=>2895,
            'semt_ad'=>'Bakış'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>635,
            'id'=>2896,
            'semt_ad'=>'Söğütlü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>636,
            'id'=>2897,
            'semt_ad'=>'Göksun'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>636,
            'id'=>2898,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>636,
            'id'=>2899,
            'semt_ad'=>'Büyükkızılcık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>636,
            'id'=>2900,
            'semt_ad'=>'Değirmendere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>636,
            'id'=>2901,
            'semt_ad'=>'Kanlıkavak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>636,
            'id'=>2902,
            'semt_ad'=>'Ericek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>638,
            'id'=>2903,
            'semt_ad'=>'Nurhak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>638,
            'id'=>2904,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>638,
            'id'=>2905,
            'semt_ad'=>'Barış'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>638,
            'id'=>2906,
            'semt_ad'=>'Yeşilkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>639,
            'id'=>2907,
            'semt_ad'=>'Pazarcık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>639,
            'id'=>2908,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>639,
            'id'=>2909,
            'semt_ad'=>'Narlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>639,
            'id'=>2910,
            'semt_ad'=>'Evri'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>639,
            'id'=>2911,
            'semt_ad'=>'Büyüknacar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>639,
            'id'=>2912,
            'semt_ad'=>'Yumaklıcerit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>640,
            'id'=>2913,
            'semt_ad'=>'Türkoğlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>640,
            'id'=>2914,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>640,
            'id'=>2915,
            'semt_ad'=>'Beyoğlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>640,
            'id'=>2916,
            'semt_ad'=>'Kılılı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>640,
            'id'=>2917,
            'semt_ad'=>'Şekeroba'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>640,
            'id'=>2918,
            'semt_ad'=>'Yeşilyöre'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>644,
            'id'=>2919,
            'semt_ad'=>'İstasyon/Tugay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>644,
            'id'=>2920,
            'semt_ad'=>'Savurkapı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>644,
            'id'=>2921,
            'semt_ad'=>'Nur'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>644,
            'id'=>2922,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>644,
            'id'=>2923,
            'semt_ad'=>'Yalım'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>644,
            'id'=>2924,
            'semt_ad'=>'Ortaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>644,
            'id'=>2925,
            'semt_ad'=>'Kabala'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>641,
            'id'=>2926,
            'semt_ad'=>'Dargeçit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>641,
            'id'=>2927,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>641,
            'id'=>2928,
            'semt_ad'=>'Kılavuz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>641,
            'id'=>2929,
            'semt_ad'=>'Sümer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>642,
            'id'=>2930,
            'semt_ad'=>'Derik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>642,
            'id'=>2931,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>643,
            'id'=>2932,
            'semt_ad'=>'Kızıltepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>643,
            'id'=>2933,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>643,
            'id'=>2934,
            'semt_ad'=>'Şenyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>643,
            'id'=>2935,
            'semt_ad'=>'Dikmen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>643,
            'id'=>2936,
            'semt_ad'=>'Gökçe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>643,
            'id'=>2937,
            'semt_ad'=>'Yüceli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>645,
            'id'=>2938,
            'semt_ad'=>'Mazıdağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>645,
            'id'=>2939,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>646,
            'id'=>2940,
            'semt_ad'=>'Bağlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>646,
            'id'=>2941,
            'semt_ad'=>'Gölcük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>646,
            'id'=>2942,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>646,
            'id'=>2943,
            'semt_ad'=>'Yolbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>646,
            'id'=>2944,
            'semt_ad'=>'Gelinkaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>646,
            'id'=>2945,
            'semt_ad'=>'Acırlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>646,
            'id'=>2946,
            'semt_ad'=>'Çavuşlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>646,
            'id'=>2947,
            'semt_ad'=>'Söğütlü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>646,
            'id'=>2948,
            'semt_ad'=>'Şenköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>647,
            'id'=>2949,
            'semt_ad'=>'Nusaybin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>647,
            'id'=>2950,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>647,
            'id'=>2951,
            'semt_ad'=>'Akarsu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>647,
            'id'=>2952,
            'semt_ad'=>'Duruca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>647,
            'id'=>2953,
            'semt_ad'=>'Girmeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>648,
            'id'=>2954,
            'semt_ad'=>'Ömerli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>648,
            'id'=>2955,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>649,
            'id'=>2956,
            'semt_ad'=>'Savur'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>649,
            'id'=>2957,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>649,
            'id'=>2958,
            'semt_ad'=>'Sürgücü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>649,
            'id'=>2959,
            'semt_ad'=>'Yeşilalan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>649,
            'id'=>2960,
            'semt_ad'=>'Pınardere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>650,
            'id'=>2961,
            'semt_ad'=>'Yeşilli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>659,
            'id'=>2962,
            'semt_ad'=>'Muğla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>659,
            'id'=>2963,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>659,
            'id'=>2964,
            'semt_ad'=>'Bayır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>659,
            'id'=>2965,
            'semt_ad'=>'Yerkesik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>659,
            'id'=>2966,
            'semt_ad'=>'Yeşilyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>659,
            'id'=>2967,
            'semt_ad'=>'Kafaca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>651,
            'id'=>2968,
            'semt_ad'=>'Bodrum'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>651,
            'id'=>2969,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>651,
            'id'=>2970,
            'semt_ad'=>'Mumcular'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>651,
            'id'=>2971,
            'semt_ad'=>'Turgutreis'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>651,
            'id'=>2972,
            'semt_ad'=>'Ortakentyahşi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>651,
            'id'=>2973,
            'semt_ad'=>'Yalıkavak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>651,
            'id'=>2974,
            'semt_ad'=>'Bitez'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>651,
            'id'=>2975,
            'semt_ad'=>'Konacık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>651,
            'id'=>2976,
            'semt_ad'=>'Gündoğan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>651,
            'id'=>2977,
            'semt_ad'=>'Göltürkbükü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>651,
            'id'=>2978,
            'semt_ad'=>'Gümüşlük (Karakaya)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>651,
            'id'=>2979,
            'semt_ad'=>'Yalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>651,
            'id'=>2980,
            'semt_ad'=>'Güvercinlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>652,
            'id'=>2981,
            'semt_ad'=>'Dalaman'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>652,
            'id'=>2982,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>653,
            'id'=>2983,
            'semt_ad'=>'Datça'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>653,
            'id'=>2984,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>654,
            'id'=>2985,
            'semt_ad'=>'Fethiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>654,
            'id'=>2986,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>654,
            'id'=>2987,
            'semt_ad'=>'Göcek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>654,
            'id'=>2988,
            'semt_ad'=>'Karaçulha'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>654,
            'id'=>2989,
            'semt_ad'=>'Eşen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>654,
            'id'=>2990,
            'semt_ad'=>'Kemer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>654,
            'id'=>2991,
            'semt_ad'=>'Seki'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>654,
            'id'=>2992,
            'semt_ad'=>'Yeşilüzümlü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>654,
            'id'=>2993,
            'semt_ad'=>'Ölüdeniz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>654,
            'id'=>2994,
            'semt_ad'=>'Çamköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>654,
            'id'=>2995,
            'semt_ad'=>'Karadere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>654,
            'id'=>2996,
            'semt_ad'=>'Çiftlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>654,
            'id'=>2997,
            'semt_ad'=>'Kumluova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>654,
            'id'=>2998,
            'semt_ad'=>'Kadıköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>655,
            'id'=>2999,
            'semt_ad'=>'Kavaklıdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>655,
            'id'=>3000,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>655,
            'id'=>3001,
            'semt_ad'=>'Menteşe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>656,
            'id'=>3002,
            'semt_ad'=>'Köyceğiz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>656,
            'id'=>3003,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>656,
            'id'=>3004,
            'semt_ad'=>'Toparlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>656,
            'id'=>3005,
            'semt_ad'=>'Beyobası'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>657,
            'id'=>3006,
            'semt_ad'=>'Marmaris'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>657,
            'id'=>3007,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>657,
            'id'=>3008,
            'semt_ad'=>'Armutalan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>657,
            'id'=>3009,
            'semt_ad'=>'İçmeler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>657,
            'id'=>3010,
            'semt_ad'=>'Bozburun'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>657,
            'id'=>3011,
            'semt_ad'=>'Beldibi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>658,
            'id'=>3012,
            'semt_ad'=>'Milas'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>658,
            'id'=>3013,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>658,
            'id'=>3014,
            'semt_ad'=>'Güllük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>658,
            'id'=>3015,
            'semt_ad'=>'Ören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>658,
            'id'=>3016,
            'semt_ad'=>'Selimiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>658,
            'id'=>3017,
            'semt_ad'=>'Beçin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>660,
            'id'=>3018,
            'semt_ad'=>'Ortaca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>660,
            'id'=>3019,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>660,
            'id'=>3020,
            'semt_ad'=>'Dalyan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>661,
            'id'=>3021,
            'semt_ad'=>'Ula'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>661,
            'id'=>3022,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>661,
            'id'=>3023,
            'semt_ad'=>'Akyaka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>661,
            'id'=>3024,
            'semt_ad'=>'Gökova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>662,
            'id'=>3025,
            'semt_ad'=>'Yatağan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>662,
            'id'=>3026,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>662,
            'id'=>3027,
            'semt_ad'=>'Turgut'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>662,
            'id'=>3028,
            'semt_ad'=>'Bozarmut'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>667,
            'id'=>3029,
            'semt_ad'=>'İstasyon'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>667,
            'id'=>3030,
            'semt_ad'=>'Zafer'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>667,
            'id'=>3031,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>667,
            'id'=>3032,
            'semt_ad'=>'Karaağaçlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>667,
            'id'=>3033,
            'semt_ad'=>'Sungu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>667,
            'id'=>3034,
            'semt_ad'=>'Kızılağaç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>667,
            'id'=>3035,
            'semt_ad'=>'Mercimekkale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>667,
            'id'=>3036,
            'semt_ad'=>'Yaygın'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>667,
            'id'=>3037,
            'semt_ad'=>'Konukbekler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>667,
            'id'=>3038,
            'semt_ad'=>'Kırköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>667,
            'id'=>3039,
            'semt_ad'=>'Serinova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>667,
            'id'=>3040,
            'semt_ad'=>'Yağcılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>663,
            'id'=>3041,
            'semt_ad'=>'Bulanık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>663,
            'id'=>3042,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>663,
            'id'=>3043,
            'semt_ad'=>'Rüstemgedik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>663,
            'id'=>3044,
            'semt_ad'=>'Yoncalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>663,
            'id'=>3045,
            'semt_ad'=>'Erentepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>663,
            'id'=>3046,
            'semt_ad'=>'Karaağıl'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>663,
            'id'=>3047,
            'semt_ad'=>'Elmakaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>663,
            'id'=>3048,
            'semt_ad'=>'Mollakent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>663,
            'id'=>3049,
            'semt_ad'=>'Uzgörür'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>663,
            'id'=>3050,
            'semt_ad'=>'Yemişen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>663,
            'id'=>3051,
            'semt_ad'=>'Sarıpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>664,
            'id'=>3052,
            'semt_ad'=>'Hasköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>664,
            'id'=>3053,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>664,
            'id'=>3054,
            'semt_ad'=>'Düzkışla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>665,
            'id'=>3055,
            'semt_ad'=>'Korkut'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>665,
            'id'=>3056,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>665,
            'id'=>3057,
            'semt_ad'=>'Altınova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>665,
            'id'=>3058,
            'semt_ad'=>'Karakale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>666,
            'id'=>3059,
            'semt_ad'=>'Malazgirt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>666,
            'id'=>3060,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>666,
            'id'=>3061,
            'semt_ad'=>'Gölkoru'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>666,
            'id'=>3062,
            'semt_ad'=>'Aktuzla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>666,
            'id'=>3063,
            'semt_ad'=>'Karahasan(Adaksu)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>666,
            'id'=>3064,
            'semt_ad'=>'Nurettin(Konakkuran)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>668,
            'id'=>3065,
            'semt_ad'=>'Varto'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>668,
            'id'=>3066,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>668,
            'id'=>3067,
            'semt_ad'=>'Çaylar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>668,
            'id'=>3068,
            'semt_ad'=>'Karaköy(Omcalı)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>675,
            'id'=>3069,
            'semt_ad'=>'Siteler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>675,
            'id'=>3070,
            'semt_ad'=>'Eskisanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>675,
            'id'=>3071,
            'semt_ad'=>'Camicedit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>675,
            'id'=>3072,
            'semt_ad'=>'Afet Evleri'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>675,
            'id'=>3073,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>675,
            'id'=>3074,
            'semt_ad'=>'Çat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>675,
            'id'=>3075,
            'semt_ad'=>'Göre'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>675,
            'id'=>3076,
            'semt_ad'=>'Kavak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>675,
            'id'=>3077,
            'semt_ad'=>'Kaymaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>675,
            'id'=>3078,
            'semt_ad'=>'Narköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>675,
            'id'=>3079,
            'semt_ad'=>'Sulusaray'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>675,
            'id'=>3080,
            'semt_ad'=>'Uçhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>669,
            'id'=>3081,
            'semt_ad'=>'Acıgöl'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>669,
            'id'=>3082,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>669,
            'id'=>3083,
            'semt_ad'=>'Karapınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>669,
            'id'=>3084,
            'semt_ad'=>'Tatlarin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>670,
            'id'=>3085,
            'semt_ad'=>'Avanos'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>670,
            'id'=>3086,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>670,
            'id'=>3087,
            'semt_ad'=>'Özkonak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>670,
            'id'=>3088,
            'semt_ad'=>'Çalış'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>670,
            'id'=>3089,
            'semt_ad'=>'Kalaba'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>671,
            'id'=>3090,
            'semt_ad'=>'Derinkuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>671,
            'id'=>3091,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>671,
            'id'=>3092,
            'semt_ad'=>'Yazıhöyük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>672,
            'id'=>3093,
            'semt_ad'=>'Gülşehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>672,
            'id'=>3094,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>672,
            'id'=>3095,
            'semt_ad'=>'Karacaşar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>672,
            'id'=>3096,
            'semt_ad'=>'Tuzköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>673,
            'id'=>3097,
            'semt_ad'=>'Hacıbektaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>673,
            'id'=>3098,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>674,
            'id'=>3099,
            'semt_ad'=>'Kozaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>674,
            'id'=>3100,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>676,
            'id'=>3101,
            'semt_ad'=>'Ürgüp'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>676,
            'id'=>3102,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>676,
            'id'=>3103,
            'semt_ad'=>'Ortahisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>676,
            'id'=>3104,
            'semt_ad'=>'Başdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3105,
            'semt_ad'=>'Sungurbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3106,
            'semt_ad'=>'Afetevleri'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3107,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3108,
            'semt_ad'=>'Değirmenli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3109,
            'semt_ad'=>'Dündarlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3110,
            'semt_ad'=>'Edikli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3111,
            'semt_ad'=>'Gümüşler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3112,
            'semt_ad'=>'Hacıabdullah'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3113,
            'semt_ad'=>'Yıldıztepe(İnli)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3114,
            'semt_ad'=>'Karaatlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3115,
            'semt_ad'=>'Sazlıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3116,
            'semt_ad'=>'Yeşilgölcük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3117,
            'semt_ad'=>'Alay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3118,
            'semt_ad'=>'Bağlama'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3119,
            'semt_ad'=>'Konaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3120,
            'semt_ad'=>'Orhanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3121,
            'semt_ad'=>'Fertek Şube'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3122,
            'semt_ad'=>'Aktaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>681,
            'id'=>3123,
            'semt_ad'=>'Kiledere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>677,
            'id'=>3124,
            'semt_ad'=>'Altunhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>677,
            'id'=>3125,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>677,
            'id'=>3126,
            'semt_ad'=>'Yakacık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>677,
            'id'=>3127,
            'semt_ad'=>'Karakapı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>677,
            'id'=>3128,
            'semt_ad'=>'Keçikalesi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>678,
            'id'=>3129,
            'semt_ad'=>'Bor'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>678,
            'id'=>3130,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>678,
            'id'=>3131,
            'semt_ad'=>'Kemerhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>678,
            'id'=>3132,
            'semt_ad'=>'Bahçeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>678,
            'id'=>3133,
            'semt_ad'=>'Çukurkuyu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>679,
            'id'=>3134,
            'semt_ad'=>'Çamardı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>679,
            'id'=>3135,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>679,
            'id'=>3136,
            'semt_ad'=>'Burç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>680,
            'id'=>3137,
            'semt_ad'=>'Özyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>680,
            'id'=>3138,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>680,
            'id'=>3139,
            'semt_ad'=>'Azatlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>680,
            'id'=>3140,
            'semt_ad'=>'Bozköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>680,
            'id'=>3141,
            'semt_ad'=>'Divarlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>682,
            'id'=>3142,
            'semt_ad'=>'Ulukışla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>682,
            'id'=>3143,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>682,
            'id'=>3144,
            'semt_ad'=>'Darboğaz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>698,
            'id'=>3145,
            'semt_ad'=>'Kumbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>698,
            'id'=>3146,
            'semt_ad'=>'Bahcelievler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>698,
            'id'=>3147,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>683,
            'id'=>3148,
            'semt_ad'=>'Akkuş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>683,
            'id'=>3149,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>683,
            'id'=>3150,
            'semt_ad'=>'Salman'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>683,
            'id'=>3151,
            'semt_ad'=>'Akpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>683,
            'id'=>3152,
            'semt_ad'=>'Yenikonak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>684,
            'id'=>3153,
            'semt_ad'=>'Aybastı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>684,
            'id'=>3154,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>684,
            'id'=>3155,
            'semt_ad'=>'Alacalar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>684,
            'id'=>3156,
            'semt_ad'=>'Çakırlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>685,
            'id'=>3157,
            'semt_ad'=>'Çamaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>685,
            'id'=>3158,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>686,
            'id'=>3159,
            'semt_ad'=>'Çatalpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>686,
            'id'=>3160,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>686,
            'id'=>3161,
            'semt_ad'=>'Göller'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>687,
            'id'=>3162,
            'semt_ad'=>'Çaybaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>687,
            'id'=>3163,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>688,
            'id'=>3164,
            'semt_ad'=>'Fatsa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>688,
            'id'=>3165,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>688,
            'id'=>3166,
            'semt_ad'=>'Ilıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>688,
            'id'=>3167,
            'semt_ad'=>'Bolaman'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>688,
            'id'=>3168,
            'semt_ad'=>'Aslancami'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>688,
            'id'=>3169,
            'semt_ad'=>'Hatipli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>689,
            'id'=>3170,
            'semt_ad'=>'Gölköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>689,
            'id'=>3171,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>689,
            'id'=>3172,
            'semt_ad'=>'Aydoğan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>689,
            'id'=>3173,
            'semt_ad'=>'Damarlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>689,
            'id'=>3174,
            'semt_ad'=>'Düzyayla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>689,
            'id'=>3175,
            'semt_ad'=>'Güzelyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>690,
            'id'=>3176,
            'semt_ad'=>'Gülyalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>690,
            'id'=>3177,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>691,
            'id'=>3178,
            'semt_ad'=>'Gürgentepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>691,
            'id'=>3179,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>691,
            'id'=>3180,
            'semt_ad'=>'Işıktepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>692,
            'id'=>3181,
            'semt_ad'=>'İkizce'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>692,
            'id'=>3182,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>692,
            'id'=>3183,
            'semt_ad'=>'Şenbolluk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>692,
            'id'=>3184,
            'semt_ad'=>'Yoğunoluk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>694,
            'id'=>3185,
            'semt_ad'=>'Kabadüz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>694,
            'id'=>3186,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>693,
            'id'=>3187,
            'semt_ad'=>'Kabataş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>695,
            'id'=>3188,
            'semt_ad'=>'Korgan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>695,
            'id'=>3189,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>695,
            'id'=>3190,
            'semt_ad'=>'Çamlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>695,
            'id'=>3191,
            'semt_ad'=>'Çiftlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>695,
            'id'=>3192,
            'semt_ad'=>'Tepealan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>696,
            'id'=>3193,
            'semt_ad'=>'Kumru'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>696,
            'id'=>3194,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>696,
            'id'=>3195,
            'semt_ad'=>'Fizme'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>697,
            'id'=>3196,
            'semt_ad'=>'Mesudiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>697,
            'id'=>3197,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>699,
            'id'=>3198,
            'semt_ad'=>'Perşembe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>699,
            'id'=>3199,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>699,
            'id'=>3200,
            'semt_ad'=>'Medreseönü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>700,
            'id'=>3201,
            'semt_ad'=>'Ulubey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>700,
            'id'=>3202,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>701,
            'id'=>3203,
            'semt_ad'=>'Ünye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>701,
            'id'=>3204,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>701,
            'id'=>3205,
            'semt_ad'=>'Tekkiraz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>701,
            'id'=>3206,
            'semt_ad'=>'Pelitliyatak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>701,
            'id'=>3207,
            'semt_ad'=>'İnkur'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>701,
            'id'=>3208,
            'semt_ad'=>'Erenyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>701,
            'id'=>3209,
            'semt_ad'=>'Fahih'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>713,
            'id'=>3210,
            'semt_ad'=>'Vilayet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>713,
            'id'=>3211,
            'semt_ad'=>'Kazımkarabekir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>713,
            'id'=>3212,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>713,
            'id'=>3213,
            'semt_ad'=>'Gündoğdu(Hamidiye)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>713,
            'id'=>3214,
            'semt_ad'=>'Çaykent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>702,
            'id'=>3215,
            'semt_ad'=>'Ardeşen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>702,
            'id'=>3216,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>702,
            'id'=>3217,
            'semt_ad'=>'Tunca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>703,
            'id'=>3218,
            'semt_ad'=>'Çamlıhemşin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>703,
            'id'=>3219,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>704,
            'id'=>3220,
            'semt_ad'=>'Çayeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>704,
            'id'=>3221,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>704,
            'id'=>3222,
            'semt_ad'=>'Madenli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>704,
            'id'=>3223,
            'semt_ad'=>'Büyükköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>704,
            'id'=>3224,
            'semt_ad'=>'Kaptanpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>705,
            'id'=>3225,
            'semt_ad'=>'Derepazarı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>705,
            'id'=>3226,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>706,
            'id'=>3227,
            'semt_ad'=>'Fındıklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>706,
            'id'=>3228,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>707,
            'id'=>3229,
            'semt_ad'=>'Güneysu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>707,
            'id'=>3230,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>708,
            'id'=>3231,
            'semt_ad'=>'Hemşin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>708,
            'id'=>3232,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>709,
            'id'=>3233,
            'semt_ad'=>'İkizdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>709,
            'id'=>3234,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>710,
            'id'=>3235,
            'semt_ad'=>'İyidere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>710,
            'id'=>3236,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>710,
            'id'=>3237,
            'semt_ad'=>'Kendirli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>711,
            'id'=>3238,
            'semt_ad'=>'Kalkandere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>711,
            'id'=>3239,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>712,
            'id'=>3240,
            'semt_ad'=>'Pazar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>712,
            'id'=>3241,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>714,
            'id'=>3242,
            'semt_ad'=>'Semerciler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>714,
            'id'=>3243,
            'semt_ad'=>'İstiklal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>714,
            'id'=>3244,
            'semt_ad'=>'Tığcılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>714,
            'id'=>3245,
            'semt_ad'=>'Tepekum'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>714,
            'id'=>3246,
            'semt_ad'=>'Karaosman'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>714,
            'id'=>3247,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>714,
            'id'=>3248,
            'semt_ad'=>'Karaman'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>720,
            'id'=>3249,
            'semt_ad'=>'Hendek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>720,
            'id'=>3250,
            'semt_ad'=>'Yeşilyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>720,
            'id'=>3251,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>716,
            'id'=>3252,
            'semt_ad'=>'Arifiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>716,
            'id'=>3253,
            'semt_ad'=>'Hanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>716,
            'id'=>3254,
            'semt_ad'=>'Nehirkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>716,
            'id'=>3255,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>717,
            'id'=>3256,
            'semt_ad'=>'Erenler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>717,
            'id'=>3257,
            'semt_ad'=>'Bekirpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>717,
            'id'=>3258,
            'semt_ad'=>'Çaybaşıyeniköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>717,
            'id'=>3259,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>727,
            'id'=>3260,
            'semt_ad'=>'Serdivan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>727,
            'id'=>3261,
            'semt_ad'=>'Kazımpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>727,
            'id'=>3262,
            'semt_ad'=>'Yazlık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>727,
            'id'=>3263,
            'semt_ad'=>'Beşköprü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>727,
            'id'=>3264,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>715,
            'id'=>3265,
            'semt_ad'=>'Akyazı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>715,
            'id'=>3266,
            'semt_ad'=>'Küçücek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>715,
            'id'=>3267,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>715,
            'id'=>3268,
            'semt_ad'=>'Dokurcun'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>715,
            'id'=>3269,
            'semt_ad'=>'Altındere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>715,
            'id'=>3270,
            'semt_ad'=>'Kuzuluk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>718,
            'id'=>3271,
            'semt_ad'=>'Ferizli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>718,
            'id'=>3272,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>719,
            'id'=>3273,
            'semt_ad'=>'Geyve'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>719,
            'id'=>3274,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>719,
            'id'=>3275,
            'semt_ad'=>'Alifuatpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>721,
            'id'=>3276,
            'semt_ad'=>'Karapürçek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>722,
            'id'=>3277,
            'semt_ad'=>'Karasu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>722,
            'id'=>3278,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>722,
            'id'=>3279,
            'semt_ad'=>'Limandere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>722,
            'id'=>3280,
            'semt_ad'=>'Kurudere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>723,
            'id'=>3281,
            'semt_ad'=>'Kaynarca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>723,
            'id'=>3282,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>724,
            'id'=>3283,
            'semt_ad'=>'Kocaali'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>724,
            'id'=>3284,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>724,
            'id'=>3285,
            'semt_ad'=>'Ortaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>725,
            'id'=>3286,
            'semt_ad'=>'Pamukova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>725,
            'id'=>3287,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>726,
            'id'=>3288,
            'semt_ad'=>'Sapanca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>726,
            'id'=>3289,
            'semt_ad'=>'Kırkpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>726,
            'id'=>3290,
            'semt_ad'=>'Kurtköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>726,
            'id'=>3291,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>728,
            'id'=>3292,
            'semt_ad'=>'Söğütlü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>728,
            'id'=>3293,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>729,
            'id'=>3294,
            'semt_ad'=>'Taraklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>729,
            'id'=>3295,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>733,
            'id'=>3296,
            'semt_ad'=>'Atakum'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>733,
            'id'=>3297,
            'semt_ad'=>'Kurupelit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>733,
            'id'=>3298,
            'semt_ad'=>'Altınkum'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>733,
            'id'=>3299,
            'semt_ad'=>'Atakent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>733,
            'id'=>3300,
            'semt_ad'=>'Çatalçam'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>733,
            'id'=>3301,
            'semt_ad'=>'Taflan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>733,
            'id'=>3302,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>739,
            'id'=>3303,
            'semt_ad'=>'Kökçüoğlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>739,
            'id'=>3304,
            'semt_ad'=>'39587'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>739,
            'id'=>3305,
            'semt_ad'=>'Hastanebaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>739,
            'id'=>3306,
            'semt_ad'=>'Cedit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>739,
            'id'=>3307,
            'semt_ad'=>'Gazi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>739,
            'id'=>3308,
            'semt_ad'=>'Rasathane'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>739,
            'id'=>3309,
            'semt_ad'=>'İstasyon'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>739,
            'id'=>3310,
            'semt_ad'=>'Yeşilkent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>739,
            'id'=>3311,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>736,
            'id'=>3312,
            'semt_ad'=>'Canik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>736,
            'id'=>3313,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>743,
            'id'=>3314,
            'semt_ad'=>'Tekkeköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>743,
            'id'=>3315,
            'semt_ad'=>'Aşağıçinik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>743,
            'id'=>3316,
            'semt_ad'=>'Kutlukent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>743,
            'id'=>3317,
            'semt_ad'=>'Büyüklü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>743,
            'id'=>3318,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>731,
            'id'=>3319,
            'semt_ad'=>'Alaçam'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>731,
            'id'=>3320,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>732,
            'id'=>3321,
            'semt_ad'=>'Asarcık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>732,
            'id'=>3322,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>734,
            'id'=>3323,
            'semt_ad'=>'Ayvacık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>734,
            'id'=>3324,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>735,
            'id'=>3325,
            'semt_ad'=>'Bahçeler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>735,
            'id'=>3326,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>735,
            'id'=>3327,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>735,
            'id'=>3328,
            'semt_ad'=>'Çetinkaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>735,
            'id'=>3329,
            'semt_ad'=>'Doğanca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>737,
            'id'=>3330,
            'semt_ad'=>'Çarşamba'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>737,
            'id'=>3331,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>737,
            'id'=>3332,
            'semt_ad'=>'Dikbıyık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>737,
            'id'=>3333,
            'semt_ad'=>'Çınarlık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>737,
            'id'=>3334,
            'semt_ad'=>'Hürriyet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>737,
            'id'=>3335,
            'semt_ad'=>'Ağcagüney'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>738,
            'id'=>3336,
            'semt_ad'=>'Havza'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>738,
            'id'=>3337,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>740,
            'id'=>3338,
            'semt_ad'=>'Kavak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>740,
            'id'=>3339,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>741,
            'id'=>3340,
            'semt_ad'=>'Ladik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>741,
            'id'=>3341,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>730,
            'id'=>3342,
            'semt_ad'=>'Ballıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>730,
            'id'=>3343,
            'semt_ad'=>'Dereköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>730,
            'id'=>3344,
            'semt_ad'=>'Yörükler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>742,
            'id'=>3345,
            'semt_ad'=>'Salıpazarı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>742,
            'id'=>3346,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>744,
            'id'=>3347,
            'semt_ad'=>'Terme'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>744,
            'id'=>3348,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>744,
            'id'=>3349,
            'semt_ad'=>'Bazlamaç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>744,
            'id'=>3350,
            'semt_ad'=>'Evci'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>744,
            'id'=>3351,
            'semt_ad'=>'Sakarlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>744,
            'id'=>3352,
            'semt_ad'=>'Hüseyinmescidi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>744,
            'id'=>3353,
            'semt_ad'=>'Söğütlü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>744,
            'id'=>3354,
            'semt_ad'=>'Kozluk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>745,
            'id'=>3355,
            'semt_ad'=>'Vezirköprü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>745,
            'id'=>3356,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>745,
            'id'=>3357,
            'semt_ad'=>'Gölköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>745,
            'id'=>3358,
            'semt_ad'=>'Narlısaray'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>746,
            'id'=>3359,
            'semt_ad'=>'Yakakent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>746,
            'id'=>3360,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>752,
            'id'=>3361,
            'semt_ad'=>'Siirt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>752,
            'id'=>3362,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>748,
            'id'=>3363,
            'semt_ad'=>'Baykan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>748,
            'id'=>3364,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>748,
            'id'=>3365,
            'semt_ad'=>'Ziyaret'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>749,
            'id'=>3366,
            'semt_ad'=>'Eruh'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>749,
            'id'=>3367,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>750,
            'id'=>3368,
            'semt_ad'=>'Kurtalan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>750,
            'id'=>3369,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>750,
            'id'=>3370,
            'semt_ad'=>'Kayabağlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>751,
            'id'=>3371,
            'semt_ad'=>'Pervari'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>751,
            'id'=>3372,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>747,
            'id'=>3373,
            'semt_ad'=>'Aydınlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>747,
            'id'=>3374,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>753,
            'id'=>3375,
            'semt_ad'=>'Şirvan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>753,
            'id'=>3376,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>761,
            'id'=>3377,
            'semt_ad'=>'Sinop'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>761,
            'id'=>3378,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>761,
            'id'=>3379,
            'semt_ad'=>'Kabalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>754,
            'id'=>3380,
            'semt_ad'=>'Ayancık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>754,
            'id'=>3381,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>754,
            'id'=>3382,
            'semt_ad'=>'Yenikonak(Otmanlı)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>755,
            'id'=>3383,
            'semt_ad'=>'Boyabat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>755,
            'id'=>3384,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>756,
            'id'=>3385,
            'semt_ad'=>'Dikmen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>756,
            'id'=>3386,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>757,
            'id'=>3387,
            'semt_ad'=>'Durağan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>757,
            'id'=>3388,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>757,
            'id'=>3389,
            'semt_ad'=>'Çerçiler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>758,
            'id'=>3390,
            'semt_ad'=>'Erfelek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>758,
            'id'=>3391,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>759,
            'id'=>3392,
            'semt_ad'=>'Gerze'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>759,
            'id'=>3393,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>760,
            'id'=>3394,
            'semt_ad'=>'Saraydüzü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>760,
            'id'=>3395,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>762,
            'id'=>3396,
            'semt_ad'=>'Türkeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>762,
            'id'=>3397,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>774,
            'id'=>3398,
            'semt_ad'=>'Mimarsinan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>774,
            'id'=>3399,
            'semt_ad'=>'Kümbet'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>774,
            'id'=>3400,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>774,
            'id'=>3401,
            'semt_ad'=>'Aydoğan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>774,
            'id'=>3402,
            'semt_ad'=>'Gökçebostan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>774,
            'id'=>3403,
            'semt_ad'=>'Ferhatbostan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>774,
            'id'=>3404,
            'semt_ad'=>'Kale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>774,
            'id'=>3405,
            'semt_ad'=>'Toptancılarsitesi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>774,
            'id'=>3406,
            'semt_ad'=>'Cumhuriyetüniversitesi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>774,
            'id'=>3407,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>774,
            'id'=>3408,
            'semt_ad'=>'Kurtlapa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>774,
            'id'=>3409,
            'semt_ad'=>'Yakupoğlan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>774,
            'id'=>3410,
            'semt_ad'=>'Yıldız'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>763,
            'id'=>3411,
            'semt_ad'=>'Akıncılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>763,
            'id'=>3412,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>764,
            'id'=>3413,
            'semt_ad'=>'Altınyayla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>764,
            'id'=>3414,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>765,
            'id'=>3415,
            'semt_ad'=>'Divriği'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>765,
            'id'=>3416,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>766,
            'id'=>3417,
            'semt_ad'=>'Doğanşar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>766,
            'id'=>3418,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>767,
            'id'=>3419,
            'semt_ad'=>'Gemerek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>767,
            'id'=>3420,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>767,
            'id'=>3421,
            'semt_ad'=>'Sızır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>767,
            'id'=>3422,
            'semt_ad'=>'Yeniçubuk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>768,
            'id'=>3423,
            'semt_ad'=>'Gölova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>768,
            'id'=>3424,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>769,
            'id'=>3425,
            'semt_ad'=>'Gürün'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>769,
            'id'=>3426,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>770,
            'id'=>3427,
            'semt_ad'=>'Hafik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>770,
            'id'=>3428,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>771,
            'id'=>3429,
            'semt_ad'=>'İmranlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>771,
            'id'=>3430,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>772,
            'id'=>3431,
            'semt_ad'=>'Kangal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>772,
            'id'=>3432,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>772,
            'id'=>3433,
            'semt_ad'=>'Alacahan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>772,
            'id'=>3434,
            'semt_ad'=>'Çetinkaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>773,
            'id'=>3435,
            'semt_ad'=>'Koyulhisar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>773,
            'id'=>3436,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>775,
            'id'=>3437,
            'semt_ad'=>'Suşehri'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>775,
            'id'=>3438,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>776,
            'id'=>3439,
            'semt_ad'=>'Şarkışla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>776,
            'id'=>3440,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>777,
            'id'=>3441,
            'semt_ad'=>'Ulaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>777,
            'id'=>3442,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>778,
            'id'=>3443,
            'semt_ad'=>'Yıldızeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>778,
            'id'=>3444,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>778,
            'id'=>3445,
            'semt_ad'=>'Güneykaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>778,
            'id'=>3446,
            'semt_ad'=>'Yavu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>779,
            'id'=>3447,
            'semt_ad'=>'Zara'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>779,
            'id'=>3448,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>788,
            'id'=>3449,
            'semt_ad'=>'Eskicami'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>788,
            'id'=>3450,
            'semt_ad'=>'Altınova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>788,
            'id'=>3451,
            'semt_ad'=>'Aydoğdu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>788,
            'id'=>3452,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>788,
            'id'=>3453,
            'semt_ad'=>'Karacakılavuz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>788,
            'id'=>3454,
            'semt_ad'=>'Barbaros'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>788,
            'id'=>3455,
            'semt_ad'=>'İnecik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>780,
            'id'=>3456,
            'semt_ad'=>'Çerkezköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>780,
            'id'=>3457,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>780,
            'id'=>3458,
            'semt_ad'=>'Kapaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>780,
            'id'=>3459,
            'semt_ad'=>'Kızılpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>780,
            'id'=>3460,
            'semt_ad'=>'Karaağaç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>780,
            'id'=>3461,
            'semt_ad'=>'Veliköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>781,
            'id'=>3462,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>781,
            'id'=>3463,
            'semt_ad'=>'Silahtar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>781,
            'id'=>3464,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>781,
            'id'=>3465,
            'semt_ad'=>'Velimeşe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>781,
            'id'=>3466,
            'semt_ad'=>'Marmaracık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>781,
            'id'=>3467,
            'semt_ad'=>'Misinli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>781,
            'id'=>3468,
            'semt_ad'=>'Ulaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>782,
            'id'=>3469,
            'semt_ad'=>'Hayrabolu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>782,
            'id'=>3470,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>782,
            'id'=>3471,
            'semt_ad'=>'Çerkezmüsellim'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>783,
            'id'=>3472,
            'semt_ad'=>'Malkara'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>783,
            'id'=>3473,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>783,
            'id'=>3474,
            'semt_ad'=>'Sağlamtaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>784,
            'id'=>3475,
            'semt_ad'=>'Marmaraereğlisi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>784,
            'id'=>3476,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>784,
            'id'=>3477,
            'semt_ad'=>'Yeniçiftlik(Sahil)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>784,
            'id'=>3478,
            'semt_ad'=>'Sultanköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>785,
            'id'=>3479,
            'semt_ad'=>'Muratlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>785,
            'id'=>3480,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>786,
            'id'=>3481,
            'semt_ad'=>'Saray'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>786,
            'id'=>3482,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>786,
            'id'=>3483,
            'semt_ad'=>'Büyükyoncalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>786,
            'id'=>3484,
            'semt_ad'=>'Beyazköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>787,
            'id'=>3485,
            'semt_ad'=>'Şarköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>787,
            'id'=>3486,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>787,
            'id'=>3487,
            'semt_ad'=>'Mürefte'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>787,
            'id'=>3488,
            'semt_ad'=>'Hoşköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>797,
            'id'=>3489,
            'semt_ad'=>'Perakende'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>797,
            'id'=>3490,
            'semt_ad'=>'Bedestenlioglu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>797,
            'id'=>3491,
            'semt_ad'=>'Karşıyaka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>797,
            'id'=>3492,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>797,
            'id'=>3493,
            'semt_ad'=>'Çat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>797,
            'id'=>3494,
            'semt_ad'=>'Çamlıbel'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>797,
            'id'=>3495,
            'semt_ad'=>'Gökdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>797,
            'id'=>3496,
            'semt_ad'=>'Emirseyit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>797,
            'id'=>3497,
            'semt_ad'=>'Güryıldız'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>789,
            'id'=>3498,
            'semt_ad'=>'Almus'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>789,
            'id'=>3499,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>789,
            'id'=>3500,
            'semt_ad'=>'Çevreli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>789,
            'id'=>3501,
            'semt_ad'=>'Ormandibi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>790,
            'id'=>3502,
            'semt_ad'=>'Artova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>790,
            'id'=>3503,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>791,
            'id'=>3504,
            'semt_ad'=>'Başçiftlik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>791,
            'id'=>3505,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>792,
            'id'=>3506,
            'semt_ad'=>'Erbaa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>792,
            'id'=>3507,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>792,
            'id'=>3508,
            'semt_ad'=>'Doğanyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>792,
            'id'=>3509,
            'semt_ad'=>'Karayaka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>792,
            'id'=>3510,
            'semt_ad'=>'Kozlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>792,
            'id'=>3511,
            'semt_ad'=>'Gökal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>793,
            'id'=>3512,
            'semt_ad'=>'Niksar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>793,
            'id'=>3513,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>793,
            'id'=>3514,
            'semt_ad'=>'Yazıcık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>793,
            'id'=>3515,
            'semt_ad'=>'Ardıçlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>793,
            'id'=>3516,
            'semt_ad'=>'Yolkonak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>794,
            'id'=>3517,
            'semt_ad'=>'Pazar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>794,
            'id'=>3518,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>794,
            'id'=>3519,
            'semt_ad'=>'Üzümören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>795,
            'id'=>3520,
            'semt_ad'=>'Reşadiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>795,
            'id'=>3521,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>795,
            'id'=>3522,
            'semt_ad'=>'Baydarlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>795,
            'id'=>3523,
            'semt_ad'=>'Hasanşeyh'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>795,
            'id'=>3524,
            'semt_ad'=>'Bereketli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>795,
            'id'=>3525,
            'semt_ad'=>'Bozçalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>796,
            'id'=>3526,
            'semt_ad'=>'Sulusaray'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>796,
            'id'=>3527,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>796,
            'id'=>3528,
            'semt_ad'=>'Dutluca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>798,
            'id'=>3529,
            'semt_ad'=>'Turhal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>798,
            'id'=>3530,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>798,
            'id'=>3531,
            'semt_ad'=>'Şenyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>798,
            'id'=>3532,
            'semt_ad'=>'Dökmetepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>798,
            'id'=>3533,
            'semt_ad'=>'Yenisu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>799,
            'id'=>3534,
            'semt_ad'=>'Yeşilyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>799,
            'id'=>3535,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>800,
            'id'=>3536,
            'semt_ad'=>'Zile'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>800,
            'id'=>3537,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>800,
            'id'=>3538,
            'semt_ad'=>'Evrenköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>800,
            'id'=>3539,
            'semt_ad'=>'İğdir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>800,
            'id'=>3540,
            'semt_ad'=>'Güzelyazı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>816,
            'id'=>3541,
            'semt_ad'=>'Erdoğdu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>816,
            'id'=>3542,
            'semt_ad'=>'Beşirli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>816,
            'id'=>3543,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>816,
            'id'=>3544,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>816,
            'id'=>3545,
            'semt_ad'=>'Bostancı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>816,
            'id'=>3546,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>816,
            'id'=>3547,
            'semt_ad'=>'Pelitli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>816,
            'id'=>3548,
            'semt_ad'=>'Akoluk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>816,
            'id'=>3549,
            'semt_ad'=>'Akyazı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>816,
            'id'=>3550,
            'semt_ad'=>'Çukurçayır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>816,
            'id'=>3551,
            'semt_ad'=>'Yalıncak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>816,
            'id'=>3552,
            'semt_ad'=>'Çağlayan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>816,
            'id'=>3553,
            'semt_ad'=>'Akçaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>801,
            'id'=>3554,
            'semt_ad'=>'Akçaabat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>801,
            'id'=>3555,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>801,
            'id'=>3556,
            'semt_ad'=>'Doğanköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>801,
            'id'=>3557,
            'semt_ad'=>'Işıklar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>801,
            'id'=>3558,
            'semt_ad'=>'Derecik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>801,
            'id'=>3559,
            'semt_ad'=>'Akçaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>801,
            'id'=>3560,
            'semt_ad'=>'Akçakale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>801,
            'id'=>3561,
            'semt_ad'=>'Akpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>801,
            'id'=>3562,
            'semt_ad'=>'Darıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>801,
            'id'=>3563,
            'semt_ad'=>'Kavaklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>801,
            'id'=>3564,
            'semt_ad'=>'Mersin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>801,
            'id'=>3565,
            'semt_ad'=>'Söğütlü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>801,
            'id'=>3566,
            'semt_ad'=>'Yıldızlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>801,
            'id'=>3567,
            'semt_ad'=>'Dörtyol'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>802,
            'id'=>3568,
            'semt_ad'=>'Araklı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>802,
            'id'=>3569,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>802,
            'id'=>3570,
            'semt_ad'=>'Dağbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>802,
            'id'=>3571,
            'semt_ad'=>'Erenler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>802,
            'id'=>3572,
            'semt_ad'=>'Yeşilyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>803,
            'id'=>3573,
            'semt_ad'=>'Arsin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>803,
            'id'=>3574,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>803,
            'id'=>3575,
            'semt_ad'=>'Yeşilyalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>804,
            'id'=>3576,
            'semt_ad'=>'Beşikdüzü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>804,
            'id'=>3577,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>805,
            'id'=>3578,
            'semt_ad'=>'Çarşıbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>805,
            'id'=>3579,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>806,
            'id'=>3580,
            'semt_ad'=>'Çaykara'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>806,
            'id'=>3581,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>806,
            'id'=>3582,
            'semt_ad'=>'Karaçam'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>807,
            'id'=>3583,
            'semt_ad'=>'Dernekpazarı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>807,
            'id'=>3584,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>808,
            'id'=>3585,
            'semt_ad'=>'Düzköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>808,
            'id'=>3586,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>808,
            'id'=>3587,
            'semt_ad'=>'Çalköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>808,
            'id'=>3588,
            'semt_ad'=>'Çayırbağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>809,
            'id'=>3589,
            'semt_ad'=>'Hayrat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>809,
            'id'=>3590,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>810,
            'id'=>3591,
            'semt_ad'=>'Köprübaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>810,
            'id'=>3592,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>810,
            'id'=>3593,
            'semt_ad'=>'Beşköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>811,
            'id'=>3594,
            'semt_ad'=>'Maçka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>811,
            'id'=>3595,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>811,
            'id'=>3596,
            'semt_ad'=>'Esiroğlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>811,
            'id'=>3597,
            'semt_ad'=>'Atasu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>812,
            'id'=>3598,
            'semt_ad'=>'Of'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>812,
            'id'=>3599,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>812,
            'id'=>3600,
            'semt_ad'=>'Bölümlü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>812,
            'id'=>3601,
            'semt_ad'=>'Kıyıcık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>812,
            'id'=>3602,
            'semt_ad'=>'Uğurlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>813,
            'id'=>3603,
            'semt_ad'=>'Sürmene'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>813,
            'id'=>3604,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>814,
            'id'=>3605,
            'semt_ad'=>'Şalpazarı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>814,
            'id'=>3606,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>814,
            'id'=>3607,
            'semt_ad'=>'Geyikli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>815,
            'id'=>3608,
            'semt_ad'=>'Tonya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>815,
            'id'=>3609,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>817,
            'id'=>3610,
            'semt_ad'=>'Vakfıkebir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>817,
            'id'=>3611,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>817,
            'id'=>3612,
            'semt_ad'=>'Yalıköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>818,
            'id'=>3613,
            'semt_ad'=>'Yomra'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>818,
            'id'=>3614,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>818,
            'id'=>3615,
            'semt_ad'=>'Kaşüstü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>818,
            'id'=>3616,
            'semt_ad'=>'Özdil'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>818,
            'id'=>3617,
            'semt_ad'=>'Oymalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>826,
            'id'=>3618,
            'semt_ad'=>'Tunceli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>826,
            'id'=>3619,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>826,
            'id'=>3620,
            'semt_ad'=>'Çiçekli(Buğulu)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>826,
            'id'=>3621,
            'semt_ad'=>'Kocakoç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>826,
            'id'=>3622,
            'semt_ad'=>'Sütlüce(Tüllük)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>819,
            'id'=>3623,
            'semt_ad'=>'Çemişgezek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>819,
            'id'=>3624,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>819,
            'id'=>3625,
            'semt_ad'=>'Akçapınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>819,
            'id'=>3626,
            'semt_ad'=>'Gedikler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>820,
            'id'=>3627,
            'semt_ad'=>'Hozat'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>820,
            'id'=>3628,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>821,
            'id'=>3629,
            'semt_ad'=>'Mazgirt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>821,
            'id'=>3630,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>821,
            'id'=>3631,
            'semt_ad'=>'Akpazar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>822,
            'id'=>3632,
            'semt_ad'=>'Nazımiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>822,
            'id'=>3633,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>822,
            'id'=>3634,
            'semt_ad'=>'Büyükyurt(Dereova)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>823,
            'id'=>3635,
            'semt_ad'=>'Ovacık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>823,
            'id'=>3636,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>823,
            'id'=>3637,
            'semt_ad'=>'Yeşilyazı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>824,
            'id'=>3638,
            'semt_ad'=>'Pertek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>824,
            'id'=>3639,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>824,
            'id'=>3640,
            'semt_ad'=>'Akdemir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>824,
            'id'=>3641,
            'semt_ad'=>'Dere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>824,
            'id'=>3642,
            'semt_ad'=>'Pınarlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>825,
            'id'=>3643,
            'semt_ad'=>'Pülümür'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>825,
            'id'=>3644,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>825,
            'id'=>3645,
            'semt_ad'=>'Kırmızıköprü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>836,
            'id'=>3646,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>836,
            'id'=>3647,
            'semt_ad'=>'Selçuklu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>836,
            'id'=>3648,
            'semt_ad'=>'Direkli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>836,
            'id'=>3649,
            'semt_ad'=>'Valilik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>836,
            'id'=>3650,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>836,
            'id'=>3651,
            'semt_ad'=>'Hamidiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>836,
            'id'=>3652,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>836,
            'id'=>3653,
            'semt_ad'=>'Kısas'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>836,
            'id'=>3654,
            'semt_ad'=>'Uğurlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>827,
            'id'=>3655,
            'semt_ad'=>'Akçakale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>827,
            'id'=>3656,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>827,
            'id'=>3657,
            'semt_ad'=>'Pekmezli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>828,
            'id'=>3658,
            'semt_ad'=>'Birecik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>828,
            'id'=>3659,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>828,
            'id'=>3660,
            'semt_ad'=>'Ayran'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>828,
            'id'=>3661,
            'semt_ad'=>'Mezra'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>829,
            'id'=>3662,
            'semt_ad'=>'Bozova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>829,
            'id'=>3663,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>829,
            'id'=>3664,
            'semt_ad'=>'Yaylak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>829,
            'id'=>3665,
            'semt_ad'=>'Yaslıca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>830,
            'id'=>3666,
            'semt_ad'=>'Ceylanpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>830,
            'id'=>3667,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>831,
            'id'=>3668,
            'semt_ad'=>'Halfeti'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>831,
            'id'=>3669,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>831,
            'id'=>3670,
            'semt_ad'=>'Yukarıgöklü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>831,
            'id'=>3671,
            'semt_ad'=>'Argıl'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>832,
            'id'=>3672,
            'semt_ad'=>'Harran'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>832,
            'id'=>3673,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>833,
            'id'=>3674,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>833,
            'id'=>3675,
            'semt_ad'=>'Gölcük'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>834,
            'id'=>3676,
            'semt_ad'=>'Siverek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>834,
            'id'=>3677,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>834,
            'id'=>3678,
            'semt_ad'=>'Gürakar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>834,
            'id'=>3679,
            'semt_ad'=>'Kapıkaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>835,
            'id'=>3680,
            'semt_ad'=>'Suruç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>835,
            'id'=>3681,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>835,
            'id'=>3682,
            'semt_ad'=>'Onbirnisan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>837,
            'id'=>3683,
            'semt_ad'=>'Viranşehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>837,
            'id'=>3684,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>843,
            'id'=>3685,
            'semt_ad'=>'Aybey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>843,
            'id'=>3686,
            'semt_ad'=>'Yenisanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>843,
            'id'=>3687,
            'semt_ad'=>'Dokumacılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>843,
            'id'=>3688,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>843,
            'id'=>3689,
            'semt_ad'=>'İlyaslı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>843,
            'id'=>3690,
            'semt_ad'=>'Bölme'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>838,
            'id'=>3691,
            'semt_ad'=>'Banaz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>838,
            'id'=>3692,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>838,
            'id'=>3693,
            'semt_ad'=>'Kızılcasöğüt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>839,
            'id'=>3694,
            'semt_ad'=>'Eşme'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>839,
            'id'=>3695,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>839,
            'id'=>3696,
            'semt_ad'=>'Yeleğen'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>840,
            'id'=>3697,
            'semt_ad'=>'Karahallı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>840,
            'id'=>3698,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>841,
            'id'=>3699,
            'semt_ad'=>'Sivaslı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>841,
            'id'=>3700,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>841,
            'id'=>3701,
            'semt_ad'=>'Tatar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>841,
            'id'=>3702,
            'semt_ad'=>'Selçikler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>841,
            'id'=>3703,
            'semt_ad'=>'Pınarbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>841,
            'id'=>3704,
            'semt_ad'=>'Yayalar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>842,
            'id'=>3705,
            'semt_ad'=>'Ulubey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>842,
            'id'=>3706,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>855,
            'id'=>3707,
            'semt_ad'=>'İskele'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>855,
            'id'=>3708,
            'semt_ad'=>'Valimithatbey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>855,
            'id'=>3709,
            'semt_ad'=>'İstasyon'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>855,
            'id'=>3710,
            'semt_ad'=>'Suphan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>855,
            'id'=>3711,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>855,
            'id'=>3712,
            'semt_ad'=>'Bostaniçi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>844,
            'id'=>3713,
            'semt_ad'=>'Bahçesaray'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>844,
            'id'=>3714,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>845,
            'id'=>3715,
            'semt_ad'=>'Başkale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>845,
            'id'=>3716,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>846,
            'id'=>3717,
            'semt_ad'=>'Çaldıran'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>846,
            'id'=>3718,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>847,
            'id'=>3719,
            'semt_ad'=>'Çatak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>847,
            'id'=>3720,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>848,
            'id'=>3721,
            'semt_ad'=>'Edremit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>848,
            'id'=>3722,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>848,
            'id'=>3723,
            'semt_ad'=>'Çiçekli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>849,
            'id'=>3724,
            'semt_ad'=>'Erciş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>849,
            'id'=>3725,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>849,
            'id'=>3726,
            'semt_ad'=>'Çelebibağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>849,
            'id'=>3727,
            'semt_ad'=>'Kocapınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>850,
            'id'=>3728,
            'semt_ad'=>'Gevaş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>850,
            'id'=>3729,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>850,
            'id'=>3730,
            'semt_ad'=>'Uysal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>851,
            'id'=>3731,
            'semt_ad'=>'Gürpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>851,
            'id'=>3732,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>851,
            'id'=>3733,
            'semt_ad'=>'Güzelsu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>851,
            'id'=>3734,
            'semt_ad'=>'Yalınca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>851,
            'id'=>3735,
            'semt_ad'=>'Kırkgeçit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>852,
            'id'=>3736,
            'semt_ad'=>'Muradiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>852,
            'id'=>3737,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>852,
            'id'=>3738,
            'semt_ad'=>'Unseli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>853,
            'id'=>3739,
            'semt_ad'=>'Özalp'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>853,
            'id'=>3740,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>853,
            'id'=>3741,
            'semt_ad'=>'Sağmalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>853,
            'id'=>3742,
            'semt_ad'=>'Dorutay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>854,
            'id'=>3743,
            'semt_ad'=>'Saray'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>854,
            'id'=>3744,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>869,
            'id'=>3745,
            'semt_ad'=>'Terminal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>869,
            'id'=>3746,
            'semt_ad'=>'Bahçeşehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>869,
            'id'=>3747,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>856,
            'id'=>3748,
            'semt_ad'=>'Akdağmadeni'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>856,
            'id'=>3749,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>856,
            'id'=>3750,
            'semt_ad'=>'Oluközü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>856,
            'id'=>3751,
            'semt_ad'=>'Umutlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>856,
            'id'=>3752,
            'semt_ad'=>'Belekçahan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>857,
            'id'=>3753,
            'semt_ad'=>'Aydıncık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>857,
            'id'=>3754,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>857,
            'id'=>3755,
            'semt_ad'=>'Kazankaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>857,
            'id'=>3756,
            'semt_ad'=>'Baydiğin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>858,
            'id'=>3757,
            'semt_ad'=>'Boğazlıyan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>858,
            'id'=>3758,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>858,
            'id'=>3759,
            'semt_ad'=>'Yamaçlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>859,
            'id'=>3760,
            'semt_ad'=>'Çandır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>859,
            'id'=>3761,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>860,
            'id'=>3762,
            'semt_ad'=>'Çayıralan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>860,
            'id'=>3763,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>860,
            'id'=>3764,
            'semt_ad'=>'Çokradan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>860,
            'id'=>3765,
            'semt_ad'=>'Konuklar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>860,
            'id'=>3766,
            'semt_ad'=>'Curalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>861,
            'id'=>3767,
            'semt_ad'=>'Çekerek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>861,
            'id'=>3768,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>862,
            'id'=>3769,
            'semt_ad'=>'Kadışehri'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>862,
            'id'=>3770,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>862,
            'id'=>3771,
            'semt_ad'=>'Halıköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>863,
            'id'=>3772,
            'semt_ad'=>'Saraykent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>863,
            'id'=>3773,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>863,
            'id'=>3774,
            'semt_ad'=>'Ozan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>864,
            'id'=>3775,
            'semt_ad'=>'Sarıkaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>864,
            'id'=>3776,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>864,
            'id'=>3777,
            'semt_ad'=>'Babayağmur'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>864,
            'id'=>3778,
            'semt_ad'=>'Karayakup'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>864,
            'id'=>3779,
            'semt_ad'=>'Yukarısarıkaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>865,
            'id'=>3780,
            'semt_ad'=>'Sorgun'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>865,
            'id'=>3781,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>865,
            'id'=>3782,
            'semt_ad'=>'Bahadın'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>865,
            'id'=>3783,
            'semt_ad'=>'Çiğdemli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>865,
            'id'=>3784,
            'semt_ad'=>'Doğankent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>865,
            'id'=>3785,
            'semt_ad'=>'Eymir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>865,
            'id'=>3786,
            'semt_ad'=>'Araplı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>865,
            'id'=>3787,
            'semt_ad'=>'Belencumafakılı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>866,
            'id'=>3788,
            'semt_ad'=>'Şefaatli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>866,
            'id'=>3789,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>867,
            'id'=>3790,
            'semt_ad'=>'Yenifakılı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>867,
            'id'=>3791,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>868,
            'id'=>3792,
            'semt_ad'=>'Yerköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>868,
            'id'=>3793,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>868,
            'id'=>3794,
            'semt_ad'=>'Sarayköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>875,
            'id'=>3795,
            'semt_ad'=>'Yeniçarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>875,
            'id'=>3796,
            'semt_ad'=>'Rüzgarlımeşe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>875,
            'id'=>3797,
            'semt_ad'=>'İkincimakas'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>875,
            'id'=>3798,
            'semt_ad'=>'Soğuksu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>875,
            'id'=>3799,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>875,
            'id'=>3800,
            'semt_ad'=>'Beycuma(Kasımlar)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>875,
            'id'=>3801,
            'semt_ad'=>'Kilimli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>875,
            'id'=>3802,
            'semt_ad'=>'Çatalağzı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>875,
            'id'=>3803,
            'semt_ad'=>'Kozlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>875,
            'id'=>3804,
            'semt_ad'=>'Gelik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>875,
            'id'=>3805,
            'semt_ad'=>'Muslu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>875,
            'id'=>3806,
            'semt_ad'=>'Elvanpazarcık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>875,
            'id'=>3807,
            'semt_ad'=>'Karaman'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>870,
            'id'=>3808,
            'semt_ad'=>'Alaplı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>870,
            'id'=>3809,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>870,
            'id'=>3810,
            'semt_ad'=>'Gümeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>871,
            'id'=>3811,
            'semt_ad'=>'Çaycuma'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>871,
            'id'=>3812,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>871,
            'id'=>3813,
            'semt_ad'=>'Filyos(Hisarönü)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>871,
            'id'=>3814,
            'semt_ad'=>'Perşembe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>871,
            'id'=>3815,
            'semt_ad'=>'Saltukova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>871,
            'id'=>3816,
            'semt_ad'=>'Karapınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>871,
            'id'=>3817,
            'semt_ad'=>'Kızılbel'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>871,
            'id'=>3818,
            'semt_ad'=>'Muharremşah'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>871,
            'id'=>3819,
            'semt_ad'=>'Nebioğlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>872,
            'id'=>3820,
            'semt_ad'=>'Devrek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>872,
            'id'=>3821,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>872,
            'id'=>3822,
            'semt_ad'=>'Eğerci'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>872,
            'id'=>3823,
            'semt_ad'=>'Özbağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>872,
            'id'=>3824,
            'semt_ad'=>'Çaydeğirmeni'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>874,
            'id'=>3825,
            'semt_ad'=>'Bağlık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>874,
            'id'=>3826,
            'semt_ad'=>'Meydanbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>874,
            'id'=>3827,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>874,
            'id'=>3828,
            'semt_ad'=>'Armutcuk(Kandilli)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>874,
            'id'=>3829,
            'semt_ad'=>'Gülüç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>874,
            'id'=>3830,
            'semt_ad'=>'Ormanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>874,
            'id'=>3831,
            'semt_ad'=>'Gökçeler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>873,
            'id'=>3832,
            'semt_ad'=>'Gökçebey'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>873,
            'id'=>3833,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>873,
            'id'=>3834,
            'semt_ad'=>'Bakacakkadı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3835,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3836,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3837,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3838,
            'semt_ad'=>'Bağlıkaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3839,
            'semt_ad'=>'Topakkaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3840,
            'semt_ad'=>'Sultanhanı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3841,
            'semt_ad'=>'Taşpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3842,
            'semt_ad'=>'Helvadere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3843,
            'semt_ad'=>'İncesu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3844,
            'semt_ad'=>'Yeşilova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3845,
            'semt_ad'=>'Yenikent'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3846,
            'semt_ad'=>'Yeşiltepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3847,
            'semt_ad'=>'Aratol'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3848,
            'semt_ad'=>'Hanobası'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3849,
            'semt_ad'=>'Hamidiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3850,
            'semt_ad'=>'Karkın'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3851,
            'semt_ad'=>'Kutlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3852,
            'semt_ad'=>'Sağlık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3853,
            'semt_ad'=>'Altınkaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>877,
            'id'=>3854,
            'semt_ad'=>'Beyazsaray'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>876,
            'id'=>3855,
            'semt_ad'=>'Ağaçören'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>876,
            'id'=>3856,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>878,
            'id'=>3857,
            'semt_ad'=>'Eskil'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>878,
            'id'=>3858,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>878,
            'id'=>3859,
            'semt_ad'=>'Eşmekaya'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>879,
            'id'=>3860,
            'semt_ad'=>'Ağaçlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>879,
            'id'=>3861,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>879,
            'id'=>3862,
            'semt_ad'=>'Demirci'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>879,
            'id'=>3863,
            'semt_ad'=>'Gülpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>880,
            'id'=>3864,
            'semt_ad'=>'Güzelyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>880,
            'id'=>3865,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>880,
            'id'=>3866,
            'semt_ad'=>'Ihlara'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>880,
            'id'=>3867,
            'semt_ad'=>'Selime'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>881,
            'id'=>3868,
            'semt_ad'=>'Ortaköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>881,
            'id'=>3869,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>881,
            'id'=>3870,
            'semt_ad'=>'Harmandalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>881,
            'id'=>3871,
            'semt_ad'=>'Balcı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>881,
            'id'=>3872,
            'semt_ad'=>'Sarıkaraman'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>882,
            'id'=>3873,
            'semt_ad'=>'Sarıyahşi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>882,
            'id'=>3874,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>884,
            'id'=>3875,
            'semt_ad'=>'Bayburt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>884,
            'id'=>3876,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>884,
            'id'=>3877,
            'semt_ad'=>'Maden'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>883,
            'id'=>3878,
            'semt_ad'=>'Aydıntepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>883,
            'id'=>3879,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>885,
            'id'=>3880,
            'semt_ad'=>'Demirözü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>885,
            'id'=>3881,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>885,
            'id'=>3882,
            'semt_ad'=>'Gökçedere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>889,
            'id'=>3883,
            'semt_ad'=>'Cedit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>889,
            'id'=>3884,
            'semt_ad'=>'İmaret'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>889,
            'id'=>3885,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>889,
            'id'=>3886,
            'semt_ad'=>'Akçaşehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>889,
            'id'=>3887,
            'semt_ad'=>'Sudurağı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>886,
            'id'=>3888,
            'semt_ad'=>'Ayrancı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>886,
            'id'=>3889,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>887,
            'id'=>3890,
            'semt_ad'=>'Kazımkarabekir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>887,
            'id'=>3891,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>888,
            'id'=>3892,
            'semt_ad'=>'Ermenek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>888,
            'id'=>3893,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>888,
            'id'=>3894,
            'semt_ad'=>'Güneyyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>888,
            'id'=>3895,
            'semt_ad'=>'Kazancı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>890,
            'id'=>3896,
            'semt_ad'=>'Sarıveliler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>890,
            'id'=>3897,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>890,
            'id'=>3898,
            'semt_ad'=>'Göktepe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>891,
            'id'=>3899,
            'semt_ad'=>'Başyayla'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>891,
            'id'=>3900,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>898,
            'id'=>3901,
            'semt_ad'=>'Fabrikalar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>898,
            'id'=>3902,
            'semt_ad'=>'Tepebaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>898,
            'id'=>3903,
            'semt_ad'=>'Yuva'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>898,
            'id'=>3904,
            'semt_ad'=>'Sanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>898,
            'id'=>3905,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>898,
            'id'=>3906,
            'semt_ad'=>'Aşağımahmutlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>898,
            'id'=>3907,
            'semt_ad'=>'Hacılar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>892,
            'id'=>3908,
            'semt_ad'=>'Bahşılı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>892,
            'id'=>3909,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>893,
            'id'=>3910,
            'semt_ad'=>'Balışeyh'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>893,
            'id'=>3911,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>894,
            'id'=>3912,
            'semt_ad'=>'Çelebi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>894,
            'id'=>3913,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>895,
            'id'=>3914,
            'semt_ad'=>'Delice'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>895,
            'id'=>3915,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>895,
            'id'=>3916,
            'semt_ad'=>'Çerikli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>896,
            'id'=>3917,
            'semt_ad'=>'Karakeçili'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>896,
            'id'=>3918,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>897,
            'id'=>3919,
            'semt_ad'=>'Keskin'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>897,
            'id'=>3920,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>899,
            'id'=>3921,
            'semt_ad'=>'Sulakyurt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>899,
            'id'=>3922,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>900,
            'id'=>3923,
            'semt_ad'=>'Yahşihan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>900,
            'id'=>3924,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>901,
            'id'=>3925,
            'semt_ad'=>'Petrol'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>901,
            'id'=>3926,
            'semt_ad'=>'Çarşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>901,
            'id'=>3927,
            'semt_ad'=>'Kültür'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>901,
            'id'=>3928,
            'semt_ad'=>'Gap'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>901,
            'id'=>3929,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>901,
            'id'=>3930,
            'semt_ad'=>'Balpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>902,
            'id'=>3931,
            'semt_ad'=>'Beşiri'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>902,
            'id'=>3932,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>902,
            'id'=>3933,
            'semt_ad'=>'Beşpınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>902,
            'id'=>3934,
            'semt_ad'=>'Beyçayırı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>902,
            'id'=>3935,
            'semt_ad'=>'Oğuz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>902,
            'id'=>3936,
            'semt_ad'=>'İkiköprü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>903,
            'id'=>3937,
            'semt_ad'=>'Gercüş'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>903,
            'id'=>3938,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>903,
            'id'=>3939,
            'semt_ad'=>'Kayapınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>904,
            'id'=>3940,
            'semt_ad'=>'Hasankeyf'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>904,
            'id'=>3941,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>905,
            'id'=>3942,
            'semt_ad'=>'Kozluk'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>905,
            'id'=>3943,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>905,
            'id'=>3944,
            'semt_ad'=>'Bekirhan(Uzunçayır)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>905,
            'id'=>3945,
            'semt_ad'=>'Tuzlagöze'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>906,
            'id'=>3946,
            'semt_ad'=>'Sason'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>906,
            'id'=>3947,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>912,
            'id'=>3948,
            'semt_ad'=>'Şırnak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>912,
            'id'=>3949,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>912,
            'id'=>3950,
            'semt_ad'=>'Kızılsu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>912,
            'id'=>3951,
            'semt_ad'=>'Balveren'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>912,
            'id'=>3952,
            'semt_ad'=>'Kasrik'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>912,
            'id'=>3953,
            'semt_ad'=>'Kumçatı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>907,
            'id'=>3954,
            'semt_ad'=>'Beytüşşebap'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>907,
            'id'=>3955,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>907,
            'id'=>3956,
            'semt_ad'=>'Mezra'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>908,
            'id'=>3957,
            'semt_ad'=>'Cizre'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>908,
            'id'=>3958,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>908,
            'id'=>3959,
            'semt_ad'=>'Dicle'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>908,
            'id'=>3960,
            'semt_ad'=>'Kocapınar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>909,
            'id'=>3961,
            'semt_ad'=>'Güçlükonak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>909,
            'id'=>3962,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>910,
            'id'=>3963,
            'semt_ad'=>'İdil'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>910,
            'id'=>3964,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>910,
            'id'=>3965,
            'semt_ad'=>'Haberli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>910,
            'id'=>3966,
            'semt_ad'=>'Oyalı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>910,
            'id'=>3967,
            'semt_ad'=>'Sırtköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>910,
            'id'=>3968,
            'semt_ad'=>'Karalar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>911,
            'id'=>3969,
            'semt_ad'=>'Silopi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>911,
            'id'=>3970,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>911,
            'id'=>3971,
            'semt_ad'=>'Çalışkan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>911,
            'id'=>3972,
            'semt_ad'=>'Görümlü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>911,
            'id'=>3973,
            'semt_ad'=>'Başverimli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>913,
            'id'=>3974,
            'semt_ad'=>'Uludere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>913,
            'id'=>3975,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>913,
            'id'=>3976,
            'semt_ad'=>'Hilal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>913,
            'id'=>3977,
            'semt_ad'=>'Ortabağ'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>913,
            'id'=>3978,
            'semt_ad'=>'Şenoba'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>913,
            'id'=>3979,
            'semt_ad'=>'Uzungeçit'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>915,
            'id'=>3980,
            'semt_ad'=>'Demirciler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>915,
            'id'=>3981,
            'semt_ad'=>'Yenisanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>915,
            'id'=>3982,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>915,
            'id'=>3983,
            'semt_ad'=>'Arıt'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>915,
            'id'=>3984,
            'semt_ad'=>'Kozcağız'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>915,
            'id'=>3985,
            'semt_ad'=>'Hasankadı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>914,
            'id'=>3986,
            'semt_ad'=>'Amasra'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>914,
            'id'=>3987,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>916,
            'id'=>3988,
            'semt_ad'=>'Kurucaşile'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>916,
            'id'=>3989,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>917,
            'id'=>3990,
            'semt_ad'=>'Ulus'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>917,
            'id'=>3991,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>917,
            'id'=>3992,
            'semt_ad'=>'Kumluca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>917,
            'id'=>3993,
            'semt_ad'=>'Abdipaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>918,
            'id'=>3994,
            'semt_ad'=>'Ardahan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>918,
            'id'=>3995,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>918,
            'id'=>3996,
            'semt_ad'=>'Hasköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>918,
            'id'=>3997,
            'semt_ad'=>'Yalnızçam'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>919,
            'id'=>3998,
            'semt_ad'=>'Çıldır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>919,
            'id'=>3999,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>919,
            'id'=>4000,
            'semt_ad'=>'Doğruyol'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>919,
            'id'=>4001,
            'semt_ad'=>'Kurtkale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>920,
            'id'=>4002,
            'semt_ad'=>'Damal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>920,
            'id'=>4003,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>921,
            'id'=>4004,
            'semt_ad'=>'Göle'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>921,
            'id'=>4005,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>921,
            'id'=>4006,
            'semt_ad'=>'Köprülü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>921,
            'id'=>4007,
            'semt_ad'=>'Çayırbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>922,
            'id'=>4008,
            'semt_ad'=>'Hanak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>922,
            'id'=>4009,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>923,
            'id'=>4010,
            'semt_ad'=>'Posof'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>923,
            'id'=>4011,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>925,
            'id'=>4012,
            'semt_ad'=>'Iğdır'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>925,
            'id'=>4013,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>925,
            'id'=>4014,
            'semt_ad'=>'Melekli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>925,
            'id'=>4015,
            'semt_ad'=>'Halfeli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>925,
            'id'=>4016,
            'semt_ad'=>'Hoşhaber'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>924,
            'id'=>4017,
            'semt_ad'=>'Aralık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>924,
            'id'=>4018,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>926,
            'id'=>4019,
            'semt_ad'=>'Karakoyunlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>926,
            'id'=>4020,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>926,
            'id'=>4021,
            'semt_ad'=>'Taşburun'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>927,
            'id'=>4022,
            'semt_ad'=>'Tuzluca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>927,
            'id'=>4023,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>927,
            'id'=>4024,
            'semt_ad'=>'Gaziler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>933,
            'id'=>4025,
            'semt_ad'=>'Mustafakemalpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>933,
            'id'=>4026,
            'semt_ad'=>'Bağlarbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>933,
            'id'=>4027,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>933,
            'id'=>4028,
            'semt_ad'=>'Gacık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>933,
            'id'=>4029,
            'semt_ad'=>'Kadıköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>928,
            'id'=>4030,
            'semt_ad'=>'Altınova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>928,
            'id'=>4031,
            'semt_ad'=>'Kaytazdere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>928,
            'id'=>4032,
            'semt_ad'=>'Subaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>928,
            'id'=>4033,
            'semt_ad'=>'Tavşanlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>929,
            'id'=>4034,
            'semt_ad'=>'Armutlu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>929,
            'id'=>4035,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>931,
            'id'=>4036,
            'semt_ad'=>'Çiftlikköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>931,
            'id'=>4037,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>931,
            'id'=>4038,
            'semt_ad'=>'Kılıç'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>931,
            'id'=>4039,
            'semt_ad'=>'Taşköprü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>930,
            'id'=>4040,
            'semt_ad'=>'Çınarcık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>930,
            'id'=>4041,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>930,
            'id'=>4042,
            'semt_ad'=>'Esenköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>930,
            'id'=>4043,
            'semt_ad'=>'Koruköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>930,
            'id'=>4044,
            'semt_ad'=>'Teşvikiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>932,
            'id'=>4045,
            'semt_ad'=>'Termal'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>932,
            'id'=>4046,
            'semt_ad'=>'Akköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>936,
            'id'=>4047,
            'semt_ad'=>'5000 Evler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>936,
            'id'=>4048,
            'semt_ad'=>'100.Yıl'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>936,
            'id'=>4049,
            'semt_ad'=>'Küçüksanayi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>936,
            'id'=>4050,
            'semt_ad'=>'Fevziçakmak'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>936,
            'id'=>4051,
            'semt_ad'=>'Yenişehir'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>936,
            'id'=>4052,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>934,
            'id'=>4053,
            'semt_ad'=>'Eflani'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>934,
            'id'=>4054,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>935,
            'id'=>4055,
            'semt_ad'=>'Eskipazar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>935,
            'id'=>4056,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>937,
            'id'=>4057,
            'semt_ad'=>'Ovacık'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>937,
            'id'=>4058,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>938,
            'id'=>4059,
            'semt_ad'=>'Safranbolu'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>938,
            'id'=>4060,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>938,
            'id'=>4061,
            'semt_ad'=>'Ovacuma'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>938,
            'id'=>4062,
            'semt_ad'=>'Yazıköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>938,
            'id'=>4063,
            'semt_ad'=>'Toprakcuma'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>938,
            'id'=>4064,
            'semt_ad'=>'Konarı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>938,
            'id'=>4065,
            'semt_ad'=>'Bostanbükü'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>939,
            'id'=>4066,
            'semt_ad'=>'Yenice'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>939,
            'id'=>4067,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>939,
            'id'=>4068,
            'semt_ad'=>'Yortanpazarı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>941,
            'id'=>4069,
            'semt_ad'=>'Kilis'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>941,
            'id'=>4070,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>940,
            'id'=>4071,
            'semt_ad'=>'Elbeyli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>940,
            'id'=>4072,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>942,
            'id'=>4073,
            'semt_ad'=>'Musabeyli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>942,
            'id'=>4074,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>943,
            'id'=>4075,
            'semt_ad'=>'Polateli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>943,
            'id'=>4076,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>948,
            'id'=>4077,
            'semt_ad'=>'Fatih'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>948,
            'id'=>4078,
            'semt_ad'=>'Gebeli/Aslanlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>948,
            'id'=>4079,
            'semt_ad'=>'Yunusemre'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>948,
            'id'=>4080,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>948,
            'id'=>4081,
            'semt_ad'=>'Kaypak(Serdar)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>948,
            'id'=>4082,
            'semt_ad'=>'Tecirli(Değirmenocağı)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>948,
            'id'=>4083,
            'semt_ad'=>'Cevdetiye'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>948,
            'id'=>4084,
            'semt_ad'=>'Yarpuz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>944,
            'id'=>4085,
            'semt_ad'=>'Bahçe'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>944,
            'id'=>4086,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>945,
            'id'=>4087,
            'semt_ad'=>'Düziçi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>945,
            'id'=>4088,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>945,
            'id'=>4089,
            'semt_ad'=>'Atalan'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>945,
            'id'=>4090,
            'semt_ad'=>'Ellek'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>945,
            'id'=>4091,
            'semt_ad'=>'Böcekli(Boyalı)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>945,
            'id'=>4092,
            'semt_ad'=>'Yarbaşı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>946,
            'id'=>4093,
            'semt_ad'=>'Hasanbeyli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>946,
            'id'=>4094,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>947,
            'id'=>4095,
            'semt_ad'=>'Dere'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>947,
            'id'=>4096,
            'semt_ad'=>'Cemalpaşa'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>947,
            'id'=>4097,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>949,
            'id'=>4098,
            'semt_ad'=>'Sumbas'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>949,
            'id'=>4099,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>950,
            'id'=>4100,
            'semt_ad'=>'Toprakkale'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>950,
            'id'=>4101,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>950,
            'id'=>4102,
            'semt_ad'=>'Tüysüz'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>954,
            'id'=>4103,
            'semt_ad'=>'Aziziye(Günlü)'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>954,
            'id'=>4104,
            'semt_ad'=>'Azmimilli/Çay'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>954,
            'id'=>4105,
            'semt_ad'=>'Beyciler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>954,
            'id'=>4106,
            'semt_ad'=>'Kalıcıkonutlar'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>954,
            'id'=>4107,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>954,
            'id'=>4108,
            'semt_ad'=>'Beyköy'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>954,
            'id'=>4109,
            'semt_ad'=>'Konuralp'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>954,
            'id'=>4110,
            'semt_ad'=>'Boğaziçi'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>951,
            'id'=>4111,
            'semt_ad'=>'Akçakoca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>951,
            'id'=>4112,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>952,
            'id'=>4113,
            'semt_ad'=>'Cumayeri'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>952,
            'id'=>4114,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>953,
            'id'=>4115,
            'semt_ad'=>'Çilimli'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>953,
            'id'=>4116,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>955,
            'id'=>4117,
            'semt_ad'=>'Gölyaka'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>955,
            'id'=>4118,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>956,
            'id'=>4119,
            'semt_ad'=>'Gümüşova'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>956,
            'id'=>4120,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>957,
            'id'=>4121,
            'semt_ad'=>'Kaynaşlı'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>957,
            'id'=>4122,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>958,
            'id'=>4123,
            'semt_ad'=>'Yığılca'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>958,
            'id'=>4124,
            'semt_ad'=>'Köyler'
        ] );



        App\Models\firma\semtler::create( [
            'ilce_id'=>437,
            'id'=>4125,
            'semt_ad'=>'Merter'
        ] );


    }
}
