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
        App\Models\iller::create( [
            'id'=>1,
            'il_ad'=>'ADANA'
        ] );

        App\Models\iller::create( [
            'id'=>2,
            'il_ad'=>'ADIYAMAN'
        ] );

        App\Models\iller::create( [
            'id'=>3,
            'il_ad'=>'AFYONKARAHİSAR'
        ] );

        App\Models\iller::create( [
            'id'=>4,
            'il_ad'=>'Ağrı'
        ] );

        App\Models\iller::create( [
            'id'=>5,
            'il_ad'=>'Amasya'
        ] );

        App\Models\iller::create( [
            'id'=>6,
            'il_ad'=>'ANKARA'
        ] );

        App\Models\iller::create( [
            'id'=>7,
            'il_ad'=>'ANTALYA'
        ] );

        App\Models\iller::create( [
            'id'=>8,
            'il_ad'=>'Artvin'
        ] );

        App\Models\iller::create( [
            'id'=>9,
            'il_ad'=>'AYDIN'
        ] );

        App\Models\iller::create( [
            'id'=>10,
            'il_ad'=>'Balıkesir'
        ] );

        App\Models\iller::create( [
            'id'=>11,
            'il_ad'=>'Bilecik'
        ] );

        App\Models\iller::create( [
            'id'=>12,
            'il_ad'=>'Bingöl'
        ] );

        App\Models\iller::create( [
            'id'=>13,
            'il_ad'=>'Bitlis'
        ] );

        App\Models\iller::create( [
            'id'=>14,
            'il_ad'=>'BOLU'
        ] );

        App\Models\iller::create( [
            'id'=>15,
            'il_ad'=>'BURDUR'
        ] );

        App\Models\iller::create( [
            'id'=>16,
            'il_ad'=>'BURSA'
        ] );

        App\Models\iller::create( [
            'id'=>17,
            'il_ad'=>'Çanakkale'
        ] );

        App\Models\iller::create( [
            'id'=>18,
            'il_ad'=>'Çankırı'
        ] );

        App\Models\iller::create( [
            'id'=>19,
            'il_ad'=>'Çorum'
        ] );

        App\Models\iller::create( [
            'id'=>20,
            'il_ad'=>'DENİZLİ'
        ] );

        App\Models\iller::create( [
            'id'=>21,
            'il_ad'=>'Diyarbakır'
        ] );

        App\Models\iller::create( [
            'id'=>22,
            'il_ad'=>'Edirne'
        ] );

        App\Models\iller::create( [
            'id'=>23,
            'il_ad'=>'ELAZIĞ'
        ] );

        App\Models\iller::create( [
            'id'=>24,
            'il_ad'=>'Erzincan'
        ] );

        App\Models\iller::create( [
            'id'=>25,
            'il_ad'=>'Erzurum'
        ] );

        App\Models\iller::create( [
            'id'=>26,
            'il_ad'=>'ESKİŞEHİR'
        ] );

        App\Models\iller::create( [
            'id'=>27,
            'il_ad'=>'GAZİANTEP'
        ] );

        App\Models\iller::create( [
            'id'=>28,
            'il_ad'=>'Giresun'
        ] );

        App\Models\iller::create( [
            'id'=>29,
            'il_ad'=>'Gümüşhane'
        ] );

        App\Models\iller::create( [
            'id'=>30,
            'il_ad'=>'Hakkari'
        ] );

        App\Models\iller::create( [
            'id'=>31,
            'il_ad'=>'Hatay'
        ] );

        App\Models\iller::create( [
            'id'=>32,
            'il_ad'=>'ISPARTA'
        ] );

        App\Models\iller::create( [
            'id'=>33,
            'il_ad'=>'MERSİN'
        ] );

        App\Models\iller::create( [
            'id'=>34,
            'il_ad'=>'İSTANBUL'
        ] );

        App\Models\iller::create( [
            'id'=>35,
            'il_ad'=>'İZMİR'
        ] );

        App\Models\iller::create( [
            'id'=>36,
            'il_ad'=>'Kars'
        ] );

        App\Models\iller::create( [
            'id'=>37,
            'il_ad'=>'Kastamonu'
        ] );

        App\Models\iller::create( [
            'id'=>38,
            'il_ad'=>'KAYSERİ'
        ] );

        App\Models\iller::create( [
            'id'=>39,
            'il_ad'=>'Kırklareli'
        ] );

        App\Models\iller::create( [
            'id'=>40,
            'il_ad'=>'KIRŞEHİR'
        ] );

        App\Models\iller::create( [
            'id'=>41,
            'il_ad'=>'Kocaeli'
        ] );

        App\Models\iller::create( [
            'id'=>42,
            'il_ad'=>'KONYA'
        ] );

        App\Models\iller::create( [
            'id'=>43,
            'il_ad'=>'KÜTAHYA'
        ] );

        App\Models\iller::create( [
            'id'=>44,
            'il_ad'=>'MALATYA'
        ] );

        App\Models\iller::create( [
            'id'=>45,
            'il_ad'=>'Manisa'
        ] );

        App\Models\iller::create( [
            'id'=>46,
            'il_ad'=>'KAHRAMANMARAŞ'
        ] );

        App\Models\iller::create( [
            'id'=>47,
            'il_ad'=>'Mardin'
        ] );

        App\Models\iller::create( [
            'id'=>48,
            'il_ad'=>'Muğla'
        ] );

        App\Models\iller::create( [
            'id'=>49,
            'il_ad'=>'Muş'
        ] );

        App\Models\iller::create( [
            'id'=>50,
            'il_ad'=>'Nevşehir'
        ] );

        App\Models\iller::create( [
            'id'=>51,
            'il_ad'=>'Niğde'
        ] );

        App\Models\iller::create( [
            'id'=>52,
            'il_ad'=>'ORDU'
        ] );

        App\Models\iller::create( [
            'id'=>53,
            'il_ad'=>'RİZE'
        ] );

        App\Models\iller::create( [
            'id'=>54,
            'il_ad'=>'SAKARYA'
        ] );

        App\Models\iller::create( [
            'id'=>55,
            'il_ad'=>'SAMSUN'
        ] );

        App\Models\iller::create( [
            'id'=>56,
            'il_ad'=>'Siirt'
        ] );

        App\Models\iller::create( [
            'id'=>57,
            'il_ad'=>'SİNOP'
        ] );

        App\Models\iller::create( [
            'id'=>58,
            'il_ad'=>'Sivas'
        ] );

        App\Models\iller::create( [
            'id'=>59,
            'il_ad'=>'Tekirdağ'
        ] );

        App\Models\iller::create( [
            'id'=>60,
            'il_ad'=>'TOKAT'
        ] );

        App\Models\iller::create( [
            'id'=>61,
            'il_ad'=>'TRABZON'
        ] );

        App\Models\iller::create( [
            'id'=>62,
            'il_ad'=>'Tunceli'
        ] );

        App\Models\iller::create( [
            'id'=>63,
            'il_ad'=>'ŞANLIURFA'
        ] );

        App\Models\iller::create( [
            'id'=>64,
            'il_ad'=>'Uşak'
        ] );

        App\Models\iller::create( [
            'id'=>65,
            'il_ad'=>'Van'
        ] );

        App\Models\iller::create( [
            'id'=>66,
            'il_ad'=>'Yozgat'
        ] );

        App\Models\iller::create( [
            'id'=>67,
            'il_ad'=>'ZONGULDAK'
        ] );

        App\Models\iller::create( [
            'id'=>68,
            'il_ad'=>'Aksaray'
        ] );

        App\Models\iller::create( [
            'id'=>69,
            'il_ad'=>'Bayburt'
        ] );

        App\Models\iller::create( [
            'id'=>70,
            'il_ad'=>'Karaman'
        ] );

        App\Models\iller::create( [
            'id'=>71,
            'il_ad'=>'Kırıkkale'
        ] );

        App\Models\iller::create( [
            'id'=>72,
            'il_ad'=>'Batman'
        ] );

        App\Models\iller::create( [
            'id'=>73,
            'il_ad'=>'Şırnak'
        ] );

        App\Models\iller::create( [
            'id'=>74,
            'il_ad'=>'Bartın'
        ] );

        App\Models\iller::create( [
            'id'=>75,
            'il_ad'=>'Ardahan'
        ] );

        App\Models\iller::create( [
            'id'=>76,
            'il_ad'=>'Iğdır'
        ] );

        App\Models\iller::create( [
            'id'=>77,
            'il_ad'=>'Yalova'
        ] );

        App\Models\iller::create( [
            'id'=>78,
            'il_ad'=>'Karabük'
        ] );

        App\Models\iller::create( [
            'id'=>79,
            'il_ad'=>'Kilis'
        ] );

        App\Models\iller::create( [
            'id'=>80,
            'il_ad'=>'Osmaniye'
        ] );

        App\Models\iller::create( [
            'id'=>81,
            'il_ad'=>'DÜZCE'
        ] );
}
}
