<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ilolustur extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lara_il')->truncate();
        App\Models\firma\iller::create( [
            'id'=>1,
            'il_ad'=>'ADANA'
        ] );

        App\Models\firma\iller::create( [
            'id'=>2,
            'il_ad'=>'ADIYAMAN'
        ] );

        App\Models\firma\iller::create( [
            'id'=>3,
            'il_ad'=>'AFYONKARAHİSAR'
        ] );

        App\Models\firma\iller::create( [
            'id'=>4,
            'il_ad'=>'Ağrı'
        ] );

        App\Models\firma\iller::create( [
            'id'=>5,
            'il_ad'=>'Amasya'
        ] );

        App\Models\firma\iller::create( [
            'id'=>6,
            'il_ad'=>'ANKARA'
        ] );

        App\Models\firma\iller::create( [
            'id'=>7,
            'il_ad'=>'ANTALYA'
        ] );

        App\Models\firma\iller::create( [
            'id'=>8,
            'il_ad'=>'Artvin'
        ] );

        App\Models\firma\iller::create( [
            'id'=>9,
            'il_ad'=>'AYDIN'
        ] );

        App\Models\firma\iller::create( [
            'id'=>10,
            'il_ad'=>'Balıkesir'
        ] );

        App\Models\firma\iller::create( [
            'id'=>11,
            'il_ad'=>'Bilecik'
        ] );

        App\Models\firma\iller::create( [
            'id'=>12,
            'il_ad'=>'Bingöl'
        ] );

        App\Models\firma\iller::create( [
            'id'=>13,
            'il_ad'=>'Bitlis'
        ] );

        App\Models\firma\iller::create( [
            'id'=>14,
            'il_ad'=>'BOLU'
        ] );

        App\Models\firma\iller::create( [
            'id'=>15,
            'il_ad'=>'BURDUR'
        ] );

        App\Models\firma\iller::create( [
            'id'=>16,
            'il_ad'=>'BURSA'
        ] );

        App\Models\firma\iller::create( [
            'id'=>17,
            'il_ad'=>'Çanakkale'
        ] );

        App\Models\firma\iller::create( [
            'id'=>18,
            'il_ad'=>'Çankırı'
        ] );

        App\Models\firma\iller::create( [
            'id'=>19,
            'il_ad'=>'Çorum'
        ] );

        App\Models\firma\iller::create( [
            'id'=>20,
            'il_ad'=>'DENİZLİ'
        ] );

        App\Models\firma\iller::create( [
            'id'=>21,
            'il_ad'=>'Diyarbakır'
        ] );

        App\Models\firma\iller::create( [
            'id'=>22,
            'il_ad'=>'Edirne'
        ] );

        App\Models\firma\iller::create( [
            'id'=>23,
            'il_ad'=>'ELAZIĞ'
        ] );

        App\Models\firma\iller::create( [
            'id'=>24,
            'il_ad'=>'Erzincan'
        ] );

        App\Models\firma\iller::create( [
            'id'=>25,
            'il_ad'=>'Erzurum'
        ] );

        App\Models\firma\iller::create( [
            'id'=>26,
            'il_ad'=>'ESKİŞEHİR'
        ] );

        App\Models\firma\iller::create( [
            'id'=>27,
            'il_ad'=>'GAZİANTEP'
        ] );

        App\Models\firma\iller::create( [
            'id'=>28,
            'il_ad'=>'Giresun'
        ] );

        App\Models\firma\iller::create( [
            'id'=>29,
            'il_ad'=>'Gümüşhane'
        ] );

        App\Models\firma\iller::create( [
            'id'=>30,
            'il_ad'=>'Hakkari'
        ] );

        App\Models\firma\iller::create( [
            'id'=>31,
            'il_ad'=>'Hatay'
        ] );

        App\Models\firma\iller::create( [
            'id'=>32,
            'il_ad'=>'ISPARTA'
        ] );

        App\Models\firma\iller::create( [
            'id'=>33,
            'il_ad'=>'MERSİN'
        ] );

        App\Models\firma\iller::create( [
            'id'=>34,
            'il_ad'=>'İSTANBUL'
        ] );

        App\Models\firma\iller::create( [
            'id'=>35,
            'il_ad'=>'İZMİR'
        ] );

        App\Models\firma\iller::create( [
            'id'=>36,
            'il_ad'=>'Kars'
        ] );

        App\Models\firma\iller::create( [
            'id'=>37,
            'il_ad'=>'Kastamonu'
        ] );

        App\Models\firma\iller::create( [
            'id'=>38,
            'il_ad'=>'KAYSERİ'
        ] );

        App\Models\firma\iller::create( [
            'id'=>39,
            'il_ad'=>'Kırklareli'
        ] );

        App\Models\firma\iller::create( [
            'id'=>40,
            'il_ad'=>'KIRŞEHİR'
        ] );

        App\Models\firma\iller::create( [
            'id'=>41,
            'il_ad'=>'Kocaeli'
        ] );

        App\Models\firma\iller::create( [
            'id'=>42,
            'il_ad'=>'KONYA'
        ] );

        App\Models\firma\iller::create( [
            'id'=>43,
            'il_ad'=>'KÜTAHYA'
        ] );

        App\Models\firma\iller::create( [
            'id'=>44,
            'il_ad'=>'MALATYA'
        ] );

        App\Models\firma\iller::create( [
            'id'=>45,
            'il_ad'=>'Manisa'
        ] );

        App\Models\firma\iller::create( [
            'id'=>46,
            'il_ad'=>'KAHRAMANMARAŞ'
        ] );

        App\Models\firma\iller::create( [
            'id'=>47,
            'il_ad'=>'Mardin'
        ] );

        App\Models\firma\iller::create( [
            'id'=>48,
            'il_ad'=>'Muğla'
        ] );

        App\Models\firma\iller::create( [
            'id'=>49,
            'il_ad'=>'Muş'
        ] );

        App\Models\firma\iller::create( [
            'id'=>50,
            'il_ad'=>'Nevşehir'
        ] );

        App\Models\firma\iller::create( [
            'id'=>51,
            'il_ad'=>'Niğde'
        ] );

        App\Models\firma\iller::create( [
            'id'=>52,
            'il_ad'=>'ORDU'
        ] );

        App\Models\firma\iller::create( [
            'id'=>53,
            'il_ad'=>'RİZE'
        ] );

        App\Models\firma\iller::create( [
            'id'=>54,
            'il_ad'=>'SAKARYA'
        ] );

        App\Models\firma\iller::create( [
            'id'=>55,
            'il_ad'=>'SAMSUN'
        ] );

        App\Models\firma\iller::create( [
            'id'=>56,
            'il_ad'=>'Siirt'
        ] );

        App\Models\firma\iller::create( [
            'id'=>57,
            'il_ad'=>'SİNOP'
        ] );

        App\Models\firma\iller::create( [
            'id'=>58,
            'il_ad'=>'Sivas'
        ] );

        App\Models\firma\iller::create( [
            'id'=>59,
            'il_ad'=>'Tekirdağ'
        ] );

        App\Models\firma\iller::create( [
            'id'=>60,
            'il_ad'=>'TOKAT'
        ] );

        App\Models\firma\iller::create( [
            'id'=>61,
            'il_ad'=>'TRABZON'
        ] );

        App\Models\firma\iller::create( [
            'id'=>62,
            'il_ad'=>'Tunceli'
        ] );

        App\Models\firma\iller::create( [
            'id'=>63,
            'il_ad'=>'ŞANLIURFA'
        ] );

        App\Models\firma\iller::create( [
            'id'=>64,
            'il_ad'=>'Uşak'
        ] );

        App\Models\firma\iller::create( [
            'id'=>65,
            'il_ad'=>'Van'
        ] );

        App\Models\firma\iller::create( [
            'id'=>66,
            'il_ad'=>'Yozgat'
        ] );

        App\Models\firma\iller::create( [
            'id'=>67,
            'il_ad'=>'ZONGULDAK'
        ] );

        App\Models\firma\iller::create( [
            'id'=>68,
            'il_ad'=>'Aksaray'
        ] );

        App\Models\firma\iller::create( [
            'id'=>69,
            'il_ad'=>'Bayburt'
        ] );

        App\Models\firma\iller::create( [
            'id'=>70,
            'il_ad'=>'Karaman'
        ] );

        App\Models\firma\iller::create( [
            'id'=>71,
            'il_ad'=>'Kırıkkale'
        ] );

        App\Models\firma\iller::create( [
            'id'=>72,
            'il_ad'=>'Batman'
        ] );

        App\Models\firma\iller::create( [
            'id'=>73,
            'il_ad'=>'Şırnak'
        ] );

        App\Models\firma\iller::create( [
            'id'=>74,
            'il_ad'=>'Bartın'
        ] );

        App\Models\firma\iller::create( [
            'id'=>75,
            'il_ad'=>'Ardahan'
        ] );

        App\Models\firma\iller::create( [
            'id'=>76,
            'il_ad'=>'Iğdır'
        ] );

        App\Models\firma\iller::create( [
            'id'=>77,
            'il_ad'=>'Yalova'
        ] );

        App\Models\firma\iller::create( [
            'id'=>78,
            'il_ad'=>'Karabük'
        ] );

        App\Models\firma\iller::create( [
            'id'=>79,
            'il_ad'=>'Kilis'
        ] );

        App\Models\firma\iller::create( [
            'id'=>80,
            'il_ad'=>'Osmaniye'
        ] );

        App\Models\firma\iller::create( [
            'id'=>81,
            'il_ad'=>'DÜZCE'
        ] );
}
}
