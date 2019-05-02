<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ilceolustur extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lara_ilce')->truncate();

        App\Models\ilceler::create( [
            'id'=>1,
            'il_id'=>1,
            'ilce_ad'=>'Aladağ(Karsantı)'
        ] );



        App\Models\ilceler::create( [
            'id'=>2,
            'il_id'=>1,
            'ilce_ad'=>'Ceyhan'
        ] );



        App\Models\ilceler::create( [
            'id'=>3,
            'il_id'=>1,
            'ilce_ad'=>'Çukurova'
        ] );



        App\Models\ilceler::create( [
            'id'=>4,
            'il_id'=>1,
            'ilce_ad'=>'Feke'
        ] );



        App\Models\ilceler::create( [
            'id'=>5,
            'il_id'=>1,
            'ilce_ad'=>'İmamoğlu'
        ] );



        App\Models\ilceler::create( [
            'id'=>6,
            'il_id'=>1,
            'ilce_ad'=>'Karaisalı'
        ] );



        App\Models\ilceler::create( [
            'id'=>7,
            'il_id'=>1,
            'ilce_ad'=>'Karataş'
        ] );



        App\Models\ilceler::create( [
            'id'=>8,
            'il_id'=>1,
            'ilce_ad'=>'Kozan'
        ] );



        App\Models\ilceler::create( [
            'id'=>9,
            'il_id'=>1,
            'ilce_ad'=>'Pozantı'
        ] );



        App\Models\ilceler::create( [
            'id'=>10,
            'il_id'=>1,
            'ilce_ad'=>'Saimbeyli'
        ] );



        App\Models\ilceler::create( [
            'id'=>11,
            'il_id'=>1,
            'ilce_ad'=>'Sarıçam'
        ] );



        App\Models\ilceler::create( [
            'id'=>12,
            'il_id'=>1,
            'ilce_ad'=>'SEYHAN'
        ] );



        App\Models\ilceler::create( [
            'id'=>13,
            'il_id'=>1,
            'ilce_ad'=>'Tufanbeyli'
        ] );



        App\Models\ilceler::create( [
            'id'=>14,
            'il_id'=>1,
            'ilce_ad'=>'Yumurtalık'
        ] );



        App\Models\ilceler::create( [
            'id'=>15,
            'il_id'=>1,
            'ilce_ad'=>'Yüreğir'
        ] );



        App\Models\ilceler::create( [
            'id'=>16,
            'il_id'=>2,
            'ilce_ad'=>'ADIYAMAN'
        ] );



        App\Models\ilceler::create( [
            'id'=>17,
            'il_id'=>2,
            'ilce_ad'=>'Besni'
        ] );



        App\Models\ilceler::create( [
            'id'=>18,
            'il_id'=>2,
            'ilce_ad'=>'Çelikhan'
        ] );



        App\Models\ilceler::create( [
            'id'=>19,
            'il_id'=>2,
            'ilce_ad'=>'Gerger'
        ] );



        App\Models\ilceler::create( [
            'id'=>20,
            'il_id'=>2,
            'ilce_ad'=>'Gölbaşı'
        ] );



        App\Models\ilceler::create( [
            'id'=>21,
            'il_id'=>2,
            'ilce_ad'=>'Kahta'
        ] );



        App\Models\ilceler::create( [
            'id'=>22,
            'il_id'=>2,
            'ilce_ad'=>'Samsat'
        ] );



        App\Models\ilceler::create( [
            'id'=>23,
            'il_id'=>2,
            'ilce_ad'=>'Sincik'
        ] );



        App\Models\ilceler::create( [
            'id'=>24,
            'il_id'=>2,
            'ilce_ad'=>'Tut'
        ] );



        App\Models\ilceler::create( [
            'id'=>25,
            'il_id'=>3,
            'ilce_ad'=>'AFYONKARAHİSAR'
        ] );



        App\Models\ilceler::create( [
            'id'=>26,
            'il_id'=>3,
            'ilce_ad'=>'Başmakçı'
        ] );



        App\Models\ilceler::create( [
            'id'=>27,
            'il_id'=>3,
            'ilce_ad'=>'Bayat'
        ] );



        App\Models\ilceler::create( [
            'id'=>28,
            'il_id'=>3,
            'ilce_ad'=>'Bolvadin'
        ] );



        App\Models\ilceler::create( [
            'id'=>29,
            'il_id'=>3,
            'ilce_ad'=>'Çay'
        ] );



        App\Models\ilceler::create( [
            'id'=>30,
            'il_id'=>3,
            'ilce_ad'=>'Çobanlar'
        ] );



        App\Models\ilceler::create( [
            'id'=>31,
            'il_id'=>3,
            'ilce_ad'=>'Dazkırı'
        ] );



        App\Models\ilceler::create( [
            'id'=>32,
            'il_id'=>3,
            'ilce_ad'=>'Dinar'
        ] );



        App\Models\ilceler::create( [
            'id'=>33,
            'il_id'=>3,
            'ilce_ad'=>'Emirdağ'
        ] );



        App\Models\ilceler::create( [
            'id'=>34,
            'il_id'=>3,
            'ilce_ad'=>'Evciler'
        ] );



        App\Models\ilceler::create( [
            'id'=>35,
            'il_id'=>3,
            'ilce_ad'=>'Hocalar'
        ] );



        App\Models\ilceler::create( [
            'id'=>36,
            'il_id'=>3,
            'ilce_ad'=>'İhsaniye'
        ] );



        App\Models\ilceler::create( [
            'id'=>37,
            'il_id'=>3,
            'ilce_ad'=>'İscehisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>38,
            'il_id'=>3,
            'ilce_ad'=>'Kızılören'
        ] );



        App\Models\ilceler::create( [
            'id'=>39,
            'il_id'=>3,
            'ilce_ad'=>'Sandıklı'
        ] );



        App\Models\ilceler::create( [
            'id'=>40,
            'il_id'=>3,
            'ilce_ad'=>'Sincanlı(Sinanpaşa)'
        ] );



        App\Models\ilceler::create( [
            'id'=>41,
            'il_id'=>3,
            'ilce_ad'=>'Sultandağı'
        ] );



        App\Models\ilceler::create( [
            'id'=>42,
            'il_id'=>3,
            'ilce_ad'=>'Şuhut'
        ] );



        App\Models\ilceler::create( [
            'id'=>43,
            'il_id'=>4,
            'ilce_ad'=>'Ağrı'
        ] );



        App\Models\ilceler::create( [
            'id'=>44,
            'il_id'=>4,
            'ilce_ad'=>'Diyadin'
        ] );



        App\Models\ilceler::create( [
            'id'=>45,
            'il_id'=>4,
            'ilce_ad'=>'Doğubeyazıt'
        ] );



        App\Models\ilceler::create( [
            'id'=>46,
            'il_id'=>4,
            'ilce_ad'=>'Eleşkirt'
        ] );



        App\Models\ilceler::create( [
            'id'=>47,
            'il_id'=>4,
            'ilce_ad'=>'Hamur'
        ] );



        App\Models\ilceler::create( [
            'id'=>48,
            'il_id'=>4,
            'ilce_ad'=>'Patnos'
        ] );



        App\Models\ilceler::create( [
            'id'=>49,
            'il_id'=>4,
            'ilce_ad'=>'Taşlıçay'
        ] );



        App\Models\ilceler::create( [
            'id'=>50,
            'il_id'=>4,
            'ilce_ad'=>'Tutak'
        ] );



        App\Models\ilceler::create( [
            'id'=>51,
            'il_id'=>5,
            'ilce_ad'=>'Amasya'
        ] );



        App\Models\ilceler::create( [
            'id'=>52,
            'il_id'=>5,
            'ilce_ad'=>'Göynücek'
        ] );



        App\Models\ilceler::create( [
            'id'=>53,
            'il_id'=>5,
            'ilce_ad'=>'Gümüşhacıköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>54,
            'il_id'=>5,
            'ilce_ad'=>'Hamamözü'
        ] );



        App\Models\ilceler::create( [
            'id'=>55,
            'il_id'=>5,
            'ilce_ad'=>'Merzifon'
        ] );



        App\Models\ilceler::create( [
            'id'=>56,
            'il_id'=>5,
            'ilce_ad'=>'Suluova'
        ] );



        App\Models\ilceler::create( [
            'id'=>57,
            'il_id'=>5,
            'ilce_ad'=>'Taşova'
        ] );



        App\Models\ilceler::create( [
            'id'=>58,
            'il_id'=>6,
            'ilce_ad'=>'Akyurt'
        ] );



        App\Models\ilceler::create( [
            'id'=>59,
            'il_id'=>6,
            'ilce_ad'=>'Altındağ'
        ] );



        App\Models\ilceler::create( [
            'id'=>60,
            'il_id'=>6,
            'ilce_ad'=>'Ayaş'
        ] );



        App\Models\ilceler::create( [
            'id'=>61,
            'il_id'=>6,
            'ilce_ad'=>'Bala'
        ] );



        App\Models\ilceler::create( [
            'id'=>62,
            'il_id'=>6,
            'ilce_ad'=>'Beypazarı'
        ] );



        App\Models\ilceler::create( [
            'id'=>63,
            'il_id'=>6,
            'ilce_ad'=>'Çamlıdere'
        ] );



        App\Models\ilceler::create( [
            'id'=>64,
            'il_id'=>6,
            'ilce_ad'=>'ÇANKAYA'
        ] );



        App\Models\ilceler::create( [
            'id'=>65,
            'il_id'=>6,
            'ilce_ad'=>'Çubuk'
        ] );



        App\Models\ilceler::create( [
            'id'=>66,
            'il_id'=>6,
            'ilce_ad'=>'Elmadağ'
        ] );



        App\Models\ilceler::create( [
            'id'=>67,
            'il_id'=>6,
            'ilce_ad'=>'ETİMESGUT'
        ] );



        App\Models\ilceler::create( [
            'id'=>68,
            'il_id'=>6,
            'ilce_ad'=>'Evren'
        ] );



        App\Models\ilceler::create( [
            'id'=>69,
            'il_id'=>6,
            'ilce_ad'=>'GÖLBAŞI'
        ] );



        App\Models\ilceler::create( [
            'id'=>70,
            'il_id'=>6,
            'ilce_ad'=>'Güdül'
        ] );



        App\Models\ilceler::create( [
            'id'=>71,
            'il_id'=>6,
            'ilce_ad'=>'Haymana'
        ] );



        App\Models\ilceler::create( [
            'id'=>72,
            'il_id'=>6,
            'ilce_ad'=>'Kalecik'
        ] );



        App\Models\ilceler::create( [
            'id'=>73,
            'il_id'=>6,
            'ilce_ad'=>'Kazan'
        ] );



        App\Models\ilceler::create( [
            'id'=>74,
            'il_id'=>6,
            'ilce_ad'=>'KEÇİÖREN'
        ] );



        App\Models\ilceler::create( [
            'id'=>75,
            'il_id'=>6,
            'ilce_ad'=>'Kızılcahamam'
        ] );



        App\Models\ilceler::create( [
            'id'=>76,
            'il_id'=>6,
            'ilce_ad'=>'MAMAK'
        ] );



        App\Models\ilceler::create( [
            'id'=>77,
            'il_id'=>6,
            'ilce_ad'=>'Nallıhan'
        ] );



        App\Models\ilceler::create( [
            'id'=>78,
            'il_id'=>6,
            'ilce_ad'=>'Polatlı'
        ] );



        App\Models\ilceler::create( [
            'id'=>79,
            'il_id'=>6,
            'ilce_ad'=>'PURSAKLAR'
        ] );



        App\Models\ilceler::create( [
            'id'=>80,
            'il_id'=>6,
            'ilce_ad'=>'SİNCAN'
        ] );



        App\Models\ilceler::create( [
            'id'=>81,
            'il_id'=>6,
            'ilce_ad'=>'Şereflikoçhisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>82,
            'il_id'=>6,
            'ilce_ad'=>'YENİMAHALLE'
        ] );



        App\Models\ilceler::create( [
            'id'=>83,
            'il_id'=>7,
            'ilce_ad'=>'Akseki'
        ] );



        App\Models\ilceler::create( [
            'id'=>84,
            'il_id'=>7,
            'ilce_ad'=>'Aksu'
        ] );



        App\Models\ilceler::create( [
            'id'=>85,
            'il_id'=>7,
            'ilce_ad'=>'Alanya'
        ] );



        App\Models\ilceler::create( [
            'id'=>86,
            'il_id'=>7,
            'ilce_ad'=>'DÖŞEMEALTI'
        ] );



        App\Models\ilceler::create( [
            'id'=>87,
            'il_id'=>7,
            'ilce_ad'=>'Elmalı'
        ] );



        App\Models\ilceler::create( [
            'id'=>88,
            'il_id'=>7,
            'ilce_ad'=>'Finike'
        ] );



        App\Models\ilceler::create( [
            'id'=>89,
            'il_id'=>7,
            'ilce_ad'=>'Gazipaşa'
        ] );



        App\Models\ilceler::create( [
            'id'=>90,
            'il_id'=>7,
            'ilce_ad'=>'Gündoğmuş'
        ] );



        App\Models\ilceler::create( [
            'id'=>91,
            'il_id'=>7,
            'ilce_ad'=>'İbradı(Aydınkent)'
        ] );



        App\Models\ilceler::create( [
            'id'=>92,
            'il_id'=>7,
            'ilce_ad'=>'Kale(Demre)'
        ] );



        App\Models\ilceler::create( [
            'id'=>93,
            'il_id'=>7,
            'ilce_ad'=>'Kaş'
        ] );



        App\Models\ilceler::create( [
            'id'=>94,
            'il_id'=>7,
            'ilce_ad'=>'Kemer'
        ] );



        App\Models\ilceler::create( [
            'id'=>95,
            'il_id'=>7,
            'ilce_ad'=>'KEPEZ'
        ] );



        App\Models\ilceler::create( [
            'id'=>96,
            'il_id'=>7,
            'ilce_ad'=>'KONYAALTI'
        ] );



        App\Models\ilceler::create( [
            'id'=>97,
            'il_id'=>7,
            'ilce_ad'=>'Korkuteli'
        ] );



        App\Models\ilceler::create( [
            'id'=>98,
            'il_id'=>7,
            'ilce_ad'=>'Kumluca'
        ] );



        App\Models\ilceler::create( [
            'id'=>99,
            'il_id'=>7,
            'ilce_ad'=>'Manavgat'
        ] );



        App\Models\ilceler::create( [
            'id'=>100,
            'il_id'=>7,
            'ilce_ad'=>'Muratpaşa'
        ] );



        App\Models\ilceler::create( [
            'id'=>101,
            'il_id'=>7,
            'ilce_ad'=>'Serik'
        ] );



        App\Models\ilceler::create( [
            'id'=>102,
            'il_id'=>8,
            'ilce_ad'=>'Ardanuç'
        ] );



        App\Models\ilceler::create( [
            'id'=>103,
            'il_id'=>8,
            'ilce_ad'=>'Arhavi'
        ] );



        App\Models\ilceler::create( [
            'id'=>104,
            'il_id'=>8,
            'ilce_ad'=>'Artvin'
        ] );



        App\Models\ilceler::create( [
            'id'=>105,
            'il_id'=>8,
            'ilce_ad'=>'Borçka'
        ] );



        App\Models\ilceler::create( [
            'id'=>106,
            'il_id'=>8,
            'ilce_ad'=>'Hopa'
        ] );



        App\Models\ilceler::create( [
            'id'=>107,
            'il_id'=>8,
            'ilce_ad'=>'Murgul(Göktaş)'
        ] );



        App\Models\ilceler::create( [
            'id'=>108,
            'il_id'=>8,
            'ilce_ad'=>'Şavşat'
        ] );



        App\Models\ilceler::create( [
            'id'=>109,
            'il_id'=>8,
            'ilce_ad'=>'Yusufeli'
        ] );



        App\Models\ilceler::create( [
            'id'=>110,
            'il_id'=>9,
            'ilce_ad'=>'Aydın'
        ] );



        App\Models\ilceler::create( [
            'id'=>111,
            'il_id'=>9,
            'ilce_ad'=>'Bozdoğan'
        ] );



        App\Models\ilceler::create( [
            'id'=>112,
            'il_id'=>9,
            'ilce_ad'=>'Buharkent(Çubukdağı)'
        ] );



        App\Models\ilceler::create( [
            'id'=>113,
            'il_id'=>9,
            'ilce_ad'=>'Çine'
        ] );



        App\Models\ilceler::create( [
            'id'=>114,
            'il_id'=>9,
            'ilce_ad'=>'Didim(Yenihisar)'
        ] );



        App\Models\ilceler::create( [
            'id'=>115,
            'il_id'=>9,
            'ilce_ad'=>'Germencik'
        ] );



        App\Models\ilceler::create( [
            'id'=>116,
            'il_id'=>9,
            'ilce_ad'=>'İncirliova'
        ] );



        App\Models\ilceler::create( [
            'id'=>117,
            'il_id'=>9,
            'ilce_ad'=>'Karacasu'
        ] );



        App\Models\ilceler::create( [
            'id'=>118,
            'il_id'=>9,
            'ilce_ad'=>'Karpuzlu'
        ] );



        App\Models\ilceler::create( [
            'id'=>119,
            'il_id'=>9,
            'ilce_ad'=>'Koçarlı'
        ] );



        App\Models\ilceler::create( [
            'id'=>120,
            'il_id'=>9,
            'ilce_ad'=>'Köşk'
        ] );



        App\Models\ilceler::create( [
            'id'=>121,
            'il_id'=>9,
            'ilce_ad'=>'Kuşadası'
        ] );



        App\Models\ilceler::create( [
            'id'=>122,
            'il_id'=>9,
            'ilce_ad'=>'Kuyucak'
        ] );



        App\Models\ilceler::create( [
            'id'=>123,
            'il_id'=>9,
            'ilce_ad'=>'NAZİLLİ'
        ] );



        App\Models\ilceler::create( [
            'id'=>124,
            'il_id'=>9,
            'ilce_ad'=>'Söke'
        ] );



        App\Models\ilceler::create( [
            'id'=>125,
            'il_id'=>9,
            'ilce_ad'=>'Sultanhisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>126,
            'il_id'=>9,
            'ilce_ad'=>'Yenipazar'
        ] );



        App\Models\ilceler::create( [
            'id'=>127,
            'il_id'=>10,
            'ilce_ad'=>'Ayvalık'
        ] );



        App\Models\ilceler::create( [
            'id'=>128,
            'il_id'=>10,
            'ilce_ad'=>'Balıkesir'
        ] );



        App\Models\ilceler::create( [
            'id'=>129,
            'il_id'=>10,
            'ilce_ad'=>'Balya'
        ] );



        App\Models\ilceler::create( [
            'id'=>130,
            'il_id'=>10,
            'ilce_ad'=>'Bandırma'
        ] );



        App\Models\ilceler::create( [
            'id'=>131,
            'il_id'=>10,
            'ilce_ad'=>'Bigadiç'
        ] );



        App\Models\ilceler::create( [
            'id'=>132,
            'il_id'=>10,
            'ilce_ad'=>'Burhaniye'
        ] );



        App\Models\ilceler::create( [
            'id'=>133,
            'il_id'=>10,
            'ilce_ad'=>'Dursunbey'
        ] );



        App\Models\ilceler::create( [
            'id'=>134,
            'il_id'=>10,
            'ilce_ad'=>'Edremit'
        ] );



        App\Models\ilceler::create( [
            'id'=>135,
            'il_id'=>10,
            'ilce_ad'=>'Erdek'
        ] );



        App\Models\ilceler::create( [
            'id'=>136,
            'il_id'=>10,
            'ilce_ad'=>'Gömeç'
        ] );



        App\Models\ilceler::create( [
            'id'=>137,
            'il_id'=>10,
            'ilce_ad'=>'Gönen'
        ] );



        App\Models\ilceler::create( [
            'id'=>138,
            'il_id'=>10,
            'ilce_ad'=>'Havran'
        ] );



        App\Models\ilceler::create( [
            'id'=>139,
            'il_id'=>10,
            'ilce_ad'=>'İvrindi'
        ] );



        App\Models\ilceler::create( [
            'id'=>140,
            'il_id'=>10,
            'ilce_ad'=>'Kepsut'
        ] );



        App\Models\ilceler::create( [
            'id'=>141,
            'il_id'=>10,
            'ilce_ad'=>'Manyas'
        ] );



        App\Models\ilceler::create( [
            'id'=>142,
            'il_id'=>10,
            'ilce_ad'=>'Marmara'
        ] );



        App\Models\ilceler::create( [
            'id'=>143,
            'il_id'=>10,
            'ilce_ad'=>'Savaştepe'
        ] );



        App\Models\ilceler::create( [
            'id'=>144,
            'il_id'=>10,
            'ilce_ad'=>'Sındırgı'
        ] );



        App\Models\ilceler::create( [
            'id'=>145,
            'il_id'=>10,
            'ilce_ad'=>'Susurluk'
        ] );



        App\Models\ilceler::create( [
            'id'=>146,
            'il_id'=>11,
            'ilce_ad'=>'Bilecik'
        ] );



        App\Models\ilceler::create( [
            'id'=>147,
            'il_id'=>11,
            'ilce_ad'=>'Bozüyük'
        ] );



        App\Models\ilceler::create( [
            'id'=>148,
            'il_id'=>11,
            'ilce_ad'=>'Gölpazarı'
        ] );



        App\Models\ilceler::create( [
            'id'=>149,
            'il_id'=>11,
            'ilce_ad'=>'İnhisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>150,
            'il_id'=>11,
            'ilce_ad'=>'Osmaneli'
        ] );



        App\Models\ilceler::create( [
            'id'=>151,
            'il_id'=>11,
            'ilce_ad'=>'Pazaryeri'
        ] );



        App\Models\ilceler::create( [
            'id'=>152,
            'il_id'=>11,
            'ilce_ad'=>'Söğüt'
        ] );



        App\Models\ilceler::create( [
            'id'=>153,
            'il_id'=>11,
            'ilce_ad'=>'Yenipazar'
        ] );



        App\Models\ilceler::create( [
            'id'=>154,
            'il_id'=>12,
            'ilce_ad'=>'Adaklı'
        ] );



        App\Models\ilceler::create( [
            'id'=>155,
            'il_id'=>12,
            'ilce_ad'=>'Bingöl'
        ] );



        App\Models\ilceler::create( [
            'id'=>156,
            'il_id'=>12,
            'ilce_ad'=>'Genç'
        ] );



        App\Models\ilceler::create( [
            'id'=>157,
            'il_id'=>12,
            'ilce_ad'=>'Karlıova'
        ] );



        App\Models\ilceler::create( [
            'id'=>158,
            'il_id'=>12,
            'ilce_ad'=>'Kığı'
        ] );



        App\Models\ilceler::create( [
            'id'=>159,
            'il_id'=>12,
            'ilce_ad'=>'Solhan'
        ] );



        App\Models\ilceler::create( [
            'id'=>160,
            'il_id'=>12,
            'ilce_ad'=>'Yayladere'
        ] );



        App\Models\ilceler::create( [
            'id'=>161,
            'il_id'=>12,
            'ilce_ad'=>'Yedisu'
        ] );



        App\Models\ilceler::create( [
            'id'=>162,
            'il_id'=>13,
            'ilce_ad'=>'Adilcevaz'
        ] );



        App\Models\ilceler::create( [
            'id'=>163,
            'il_id'=>13,
            'ilce_ad'=>'Ahlat'
        ] );



        App\Models\ilceler::create( [
            'id'=>164,
            'il_id'=>13,
            'ilce_ad'=>'Bitlis'
        ] );



        App\Models\ilceler::create( [
            'id'=>165,
            'il_id'=>13,
            'ilce_ad'=>'Güroymak'
        ] );



        App\Models\ilceler::create( [
            'id'=>166,
            'il_id'=>13,
            'ilce_ad'=>'Hizan'
        ] );



        App\Models\ilceler::create( [
            'id'=>167,
            'il_id'=>13,
            'ilce_ad'=>'Mutki'
        ] );



        App\Models\ilceler::create( [
            'id'=>168,
            'il_id'=>13,
            'ilce_ad'=>'Tatvan'
        ] );



        App\Models\ilceler::create( [
            'id'=>169,
            'il_id'=>14,
            'ilce_ad'=>'BOLU'
        ] );



        App\Models\ilceler::create( [
            'id'=>170,
            'il_id'=>14,
            'ilce_ad'=>'Dörtdivan'
        ] );



        App\Models\ilceler::create( [
            'id'=>171,
            'il_id'=>14,
            'ilce_ad'=>'Gerede'
        ] );



        App\Models\ilceler::create( [
            'id'=>172,
            'il_id'=>14,
            'ilce_ad'=>'Göynük'
        ] );



        App\Models\ilceler::create( [
            'id'=>173,
            'il_id'=>14,
            'ilce_ad'=>'Kıbrıscık'
        ] );



        App\Models\ilceler::create( [
            'id'=>174,
            'il_id'=>14,
            'ilce_ad'=>'Mengen'
        ] );



        App\Models\ilceler::create( [
            'id'=>175,
            'il_id'=>14,
            'ilce_ad'=>'Mudurnu'
        ] );



        App\Models\ilceler::create( [
            'id'=>176,
            'il_id'=>14,
            'ilce_ad'=>'Seben'
        ] );



        App\Models\ilceler::create( [
            'id'=>177,
            'il_id'=>14,
            'ilce_ad'=>'Yeniçağa'
        ] );



        App\Models\ilceler::create( [
            'id'=>178,
            'il_id'=>15,
            'ilce_ad'=>'Ağlasun'
        ] );



        App\Models\ilceler::create( [
            'id'=>179,
            'il_id'=>15,
            'ilce_ad'=>'Altınyayla(Dirmil)'
        ] );



        App\Models\ilceler::create( [
            'id'=>180,
            'il_id'=>15,
            'ilce_ad'=>'Bucak'
        ] );



        App\Models\ilceler::create( [
            'id'=>181,
            'il_id'=>15,
            'ilce_ad'=>'BURDUR'
        ] );



        App\Models\ilceler::create( [
            'id'=>182,
            'il_id'=>15,
            'ilce_ad'=>'Çavdır'
        ] );



        App\Models\ilceler::create( [
            'id'=>183,
            'il_id'=>15,
            'ilce_ad'=>'Çeltikçi'
        ] );



        App\Models\ilceler::create( [
            'id'=>184,
            'il_id'=>15,
            'ilce_ad'=>'Gölhisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>185,
            'il_id'=>15,
            'ilce_ad'=>'Karamanlı'
        ] );



        App\Models\ilceler::create( [
            'id'=>186,
            'il_id'=>15,
            'ilce_ad'=>'Kemer'
        ] );



        App\Models\ilceler::create( [
            'id'=>187,
            'il_id'=>15,
            'ilce_ad'=>'Tefenni'
        ] );



        App\Models\ilceler::create( [
            'id'=>188,
            'il_id'=>15,
            'ilce_ad'=>'Yeşilova'
        ] );



        App\Models\ilceler::create( [
            'id'=>189,
            'il_id'=>16,
            'ilce_ad'=>'Büyükorhan'
        ] );



        App\Models\ilceler::create( [
            'id'=>190,
            'il_id'=>16,
            'ilce_ad'=>'Gemlik'
        ] );



        App\Models\ilceler::create( [
            'id'=>191,
            'il_id'=>16,
            'ilce_ad'=>'Gürsu'
        ] );



        App\Models\ilceler::create( [
            'id'=>192,
            'il_id'=>16,
            'ilce_ad'=>'Harmancık'
        ] );



        App\Models\ilceler::create( [
            'id'=>193,
            'il_id'=>16,
            'ilce_ad'=>'İnegöl'
        ] );



        App\Models\ilceler::create( [
            'id'=>194,
            'il_id'=>16,
            'ilce_ad'=>'İznik'
        ] );



        App\Models\ilceler::create( [
            'id'=>195,
            'il_id'=>16,
            'ilce_ad'=>'Karacabey'
        ] );



        App\Models\ilceler::create( [
            'id'=>196,
            'il_id'=>16,
            'ilce_ad'=>'Keles'
        ] );



        App\Models\ilceler::create( [
            'id'=>197,
            'il_id'=>16,
            'ilce_ad'=>'Kestel'
        ] );



        App\Models\ilceler::create( [
            'id'=>198,
            'il_id'=>16,
            'ilce_ad'=>'MUDANYA'
        ] );



        App\Models\ilceler::create( [
            'id'=>199,
            'il_id'=>16,
            'ilce_ad'=>'Mustafakemalpaşa'
        ] );



        App\Models\ilceler::create( [
            'id'=>200,
            'il_id'=>16,
            'ilce_ad'=>'Nilüfer'
        ] );



        App\Models\ilceler::create( [
            'id'=>201,
            'il_id'=>16,
            'ilce_ad'=>'Orhaneli'
        ] );



        App\Models\ilceler::create( [
            'id'=>202,
            'il_id'=>16,
            'ilce_ad'=>'Orhangazi'
        ] );



        App\Models\ilceler::create( [
            'id'=>203,
            'il_id'=>16,
            'ilce_ad'=>'OSMANGAZİ'
        ] );



        App\Models\ilceler::create( [
            'id'=>204,
            'il_id'=>16,
            'ilce_ad'=>'Yenişehir'
        ] );



        App\Models\ilceler::create( [
            'id'=>205,
            'il_id'=>16,
            'ilce_ad'=>'YILDIRIM'
        ] );



        App\Models\ilceler::create( [
            'id'=>206,
            'il_id'=>17,
            'ilce_ad'=>'Ayvacık'
        ] );



        App\Models\ilceler::create( [
            'id'=>207,
            'il_id'=>17,
            'ilce_ad'=>'Bayramiç'
        ] );



        App\Models\ilceler::create( [
            'id'=>208,
            'il_id'=>17,
            'ilce_ad'=>'Biga'
        ] );



        App\Models\ilceler::create( [
            'id'=>209,
            'il_id'=>17,
            'ilce_ad'=>'Bozcaada'
        ] );



        App\Models\ilceler::create( [
            'id'=>210,
            'il_id'=>17,
            'ilce_ad'=>'Çan'
        ] );



        App\Models\ilceler::create( [
            'id'=>211,
            'il_id'=>17,
            'ilce_ad'=>'Çanakkale'
        ] );



        App\Models\ilceler::create( [
            'id'=>212,
            'il_id'=>17,
            'ilce_ad'=>'Eceabat'
        ] );



        App\Models\ilceler::create( [
            'id'=>213,
            'il_id'=>17,
            'ilce_ad'=>'Ezine'
        ] );



        App\Models\ilceler::create( [
            'id'=>214,
            'il_id'=>17,
            'ilce_ad'=>'Gelibolu'
        ] );



        App\Models\ilceler::create( [
            'id'=>215,
            'il_id'=>17,
            'ilce_ad'=>'Gökçeada(İmroz)'
        ] );



        App\Models\ilceler::create( [
            'id'=>216,
            'il_id'=>17,
            'ilce_ad'=>'Lapseki'
        ] );



        App\Models\ilceler::create( [
            'id'=>217,
            'il_id'=>17,
            'ilce_ad'=>'Yenice'
        ] );



        App\Models\ilceler::create( [
            'id'=>218,
            'il_id'=>18,
            'ilce_ad'=>'Atkaracalar'
        ] );



        App\Models\ilceler::create( [
            'id'=>219,
            'il_id'=>18,
            'ilce_ad'=>'Bayramören'
        ] );



        App\Models\ilceler::create( [
            'id'=>220,
            'il_id'=>18,
            'ilce_ad'=>'Çankırı'
        ] );



        App\Models\ilceler::create( [
            'id'=>221,
            'il_id'=>18,
            'ilce_ad'=>'Çerkeş'
        ] );



        App\Models\ilceler::create( [
            'id'=>222,
            'il_id'=>18,
            'ilce_ad'=>'Eldivan'
        ] );



        App\Models\ilceler::create( [
            'id'=>223,
            'il_id'=>18,
            'ilce_ad'=>'Ilgaz'
        ] );



        App\Models\ilceler::create( [
            'id'=>224,
            'il_id'=>18,
            'ilce_ad'=>'Kızılırmak'
        ] );



        App\Models\ilceler::create( [
            'id'=>225,
            'il_id'=>18,
            'ilce_ad'=>'Korgun'
        ] );



        App\Models\ilceler::create( [
            'id'=>226,
            'il_id'=>18,
            'ilce_ad'=>'Kurşunlu'
        ] );



        App\Models\ilceler::create( [
            'id'=>227,
            'il_id'=>18,
            'ilce_ad'=>'Orta'
        ] );



        App\Models\ilceler::create( [
            'id'=>228,
            'il_id'=>18,
            'ilce_ad'=>'Şabanözü'
        ] );



        App\Models\ilceler::create( [
            'id'=>229,
            'il_id'=>18,
            'ilce_ad'=>'Yapraklı'
        ] );



        App\Models\ilceler::create( [
            'id'=>230,
            'il_id'=>19,
            'ilce_ad'=>'Alaca'
        ] );



        App\Models\ilceler::create( [
            'id'=>231,
            'il_id'=>19,
            'ilce_ad'=>'Bayat'
        ] );



        App\Models\ilceler::create( [
            'id'=>232,
            'il_id'=>19,
            'ilce_ad'=>'Boğazkale'
        ] );



        App\Models\ilceler::create( [
            'id'=>233,
            'il_id'=>19,
            'ilce_ad'=>'Çorum'
        ] );



        App\Models\ilceler::create( [
            'id'=>234,
            'il_id'=>19,
            'ilce_ad'=>'Dodurga'
        ] );



        App\Models\ilceler::create( [
            'id'=>235,
            'il_id'=>19,
            'ilce_ad'=>'İskilip'
        ] );



        App\Models\ilceler::create( [
            'id'=>236,
            'il_id'=>19,
            'ilce_ad'=>'Kargı'
        ] );



        App\Models\ilceler::create( [
            'id'=>237,
            'il_id'=>19,
            'ilce_ad'=>'Laçin'
        ] );



        App\Models\ilceler::create( [
            'id'=>238,
            'il_id'=>19,
            'ilce_ad'=>'Mecitözü'
        ] );



        App\Models\ilceler::create( [
            'id'=>239,
            'il_id'=>19,
            'ilce_ad'=>'Oğuzlar(Karaören)'
        ] );



        App\Models\ilceler::create( [
            'id'=>240,
            'il_id'=>19,
            'ilce_ad'=>'Ortaköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>241,
            'il_id'=>19,
            'ilce_ad'=>'Osmancık'
        ] );



        App\Models\ilceler::create( [
            'id'=>242,
            'il_id'=>19,
            'ilce_ad'=>'Sungurlu'
        ] );



        App\Models\ilceler::create( [
            'id'=>243,
            'il_id'=>19,
            'ilce_ad'=>'Uğurludağ'
        ] );



        App\Models\ilceler::create( [
            'id'=>244,
            'il_id'=>20,
            'ilce_ad'=>'Acıpayam'
        ] );



        App\Models\ilceler::create( [
            'id'=>245,
            'il_id'=>20,
            'ilce_ad'=>'PAMUKKALE'
        ] );



        App\Models\ilceler::create( [
            'id'=>246,
            'il_id'=>20,
            'ilce_ad'=>'Babadağ'
        ] );



        App\Models\ilceler::create( [
            'id'=>247,
            'il_id'=>20,
            'ilce_ad'=>'Baklan'
        ] );



        App\Models\ilceler::create( [
            'id'=>248,
            'il_id'=>20,
            'ilce_ad'=>'Bekilli'
        ] );



        App\Models\ilceler::create( [
            'id'=>249,
            'il_id'=>20,
            'ilce_ad'=>'Beyağaç'
        ] );



        App\Models\ilceler::create( [
            'id'=>250,
            'il_id'=>20,
            'ilce_ad'=>'Bozkurt'
        ] );



        App\Models\ilceler::create( [
            'id'=>251,
            'il_id'=>20,
            'ilce_ad'=>'Buldan'
        ] );



        App\Models\ilceler::create( [
            'id'=>252,
            'il_id'=>20,
            'ilce_ad'=>'Çal'
        ] );



        App\Models\ilceler::create( [
            'id'=>253,
            'il_id'=>20,
            'ilce_ad'=>'Çameli'
        ] );



        App\Models\ilceler::create( [
            'id'=>254,
            'il_id'=>20,
            'ilce_ad'=>'Çardak'
        ] );



        App\Models\ilceler::create( [
            'id'=>255,
            'il_id'=>20,
            'ilce_ad'=>'Çivril'
        ] );



        App\Models\ilceler::create( [
            'id'=>256,
            'il_id'=>20,
            'ilce_ad'=>'Denizli'
        ] );



        App\Models\ilceler::create( [
            'id'=>257,
            'il_id'=>20,
            'ilce_ad'=>'Güney'
        ] );



        App\Models\ilceler::create( [
            'id'=>258,
            'il_id'=>20,
            'ilce_ad'=>'Honaz'
        ] );



        App\Models\ilceler::create( [
            'id'=>259,
            'il_id'=>20,
            'ilce_ad'=>'Kale'
        ] );



        App\Models\ilceler::create( [
            'id'=>260,
            'il_id'=>20,
            'ilce_ad'=>'Sarayköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>261,
            'il_id'=>20,
            'ilce_ad'=>'Serinhisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>262,
            'il_id'=>20,
            'ilce_ad'=>'Tavas'
        ] );



        App\Models\ilceler::create( [
            'id'=>263,
            'il_id'=>21,
            'ilce_ad'=>'Bağlar'
        ] );



        App\Models\ilceler::create( [
            'id'=>264,
            'il_id'=>21,
            'ilce_ad'=>'Bismil'
        ] );



        App\Models\ilceler::create( [
            'id'=>265,
            'il_id'=>21,
            'ilce_ad'=>'Çermik'
        ] );



        App\Models\ilceler::create( [
            'id'=>266,
            'il_id'=>21,
            'ilce_ad'=>'Çınar'
        ] );



        App\Models\ilceler::create( [
            'id'=>267,
            'il_id'=>21,
            'ilce_ad'=>'Çüngüş'
        ] );



        App\Models\ilceler::create( [
            'id'=>268,
            'il_id'=>21,
            'ilce_ad'=>'Dicle'
        ] );



        App\Models\ilceler::create( [
            'id'=>269,
            'il_id'=>21,
            'ilce_ad'=>'Eğil'
        ] );



        App\Models\ilceler::create( [
            'id'=>270,
            'il_id'=>21,
            'ilce_ad'=>'Ergani'
        ] );



        App\Models\ilceler::create( [
            'id'=>271,
            'il_id'=>21,
            'ilce_ad'=>'Hani'
        ] );



        App\Models\ilceler::create( [
            'id'=>272,
            'il_id'=>21,
            'ilce_ad'=>'Hazro'
        ] );



        App\Models\ilceler::create( [
            'id'=>273,
            'il_id'=>21,
            'ilce_ad'=>'Kayapınar'
        ] );



        App\Models\ilceler::create( [
            'id'=>274,
            'il_id'=>21,
            'ilce_ad'=>'Kocaköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>275,
            'il_id'=>21,
            'ilce_ad'=>'Kulp'
        ] );



        App\Models\ilceler::create( [
            'id'=>276,
            'il_id'=>21,
            'ilce_ad'=>'Lice'
        ] );



        App\Models\ilceler::create( [
            'id'=>277,
            'il_id'=>21,
            'ilce_ad'=>'Silvan'
        ] );



        App\Models\ilceler::create( [
            'id'=>278,
            'il_id'=>21,
            'ilce_ad'=>'Sur'
        ] );



        App\Models\ilceler::create( [
            'id'=>279,
            'il_id'=>21,
            'ilce_ad'=>'Yenişehir'
        ] );



        App\Models\ilceler::create( [
            'id'=>280,
            'il_id'=>22,
            'ilce_ad'=>'Edirne'
        ] );



        App\Models\ilceler::create( [
            'id'=>281,
            'il_id'=>22,
            'ilce_ad'=>'Enez'
        ] );



        App\Models\ilceler::create( [
            'id'=>282,
            'il_id'=>22,
            'ilce_ad'=>'Havsa'
        ] );



        App\Models\ilceler::create( [
            'id'=>283,
            'il_id'=>22,
            'ilce_ad'=>'İpsala'
        ] );



        App\Models\ilceler::create( [
            'id'=>284,
            'il_id'=>22,
            'ilce_ad'=>'Keşan'
        ] );



        App\Models\ilceler::create( [
            'id'=>285,
            'il_id'=>22,
            'ilce_ad'=>'Lalapaşa'
        ] );



        App\Models\ilceler::create( [
            'id'=>286,
            'il_id'=>22,
            'ilce_ad'=>'Meriç'
        ] );



        App\Models\ilceler::create( [
            'id'=>287,
            'il_id'=>22,
            'ilce_ad'=>'Süleoğlu(Süloğlu)'
        ] );



        App\Models\ilceler::create( [
            'id'=>288,
            'il_id'=>22,
            'ilce_ad'=>'Uzunköprü'
        ] );



        App\Models\ilceler::create( [
            'id'=>289,
            'il_id'=>23,
            'ilce_ad'=>'Ağın'
        ] );



        App\Models\ilceler::create( [
            'id'=>290,
            'il_id'=>23,
            'ilce_ad'=>'Alacakaya'
        ] );



        App\Models\ilceler::create( [
            'id'=>291,
            'il_id'=>23,
            'ilce_ad'=>'Arıcak'
        ] );



        App\Models\ilceler::create( [
            'id'=>292,
            'il_id'=>23,
            'ilce_ad'=>'Baskil'
        ] );



        App\Models\ilceler::create( [
            'id'=>293,
            'il_id'=>23,
            'ilce_ad'=>'ELAZIĞ'
        ] );



        App\Models\ilceler::create( [
            'id'=>294,
            'il_id'=>23,
            'ilce_ad'=>'Karakoçan'
        ] );



        App\Models\ilceler::create( [
            'id'=>295,
            'il_id'=>23,
            'ilce_ad'=>'Keban'
        ] );



        App\Models\ilceler::create( [
            'id'=>296,
            'il_id'=>23,
            'ilce_ad'=>'Kovancılar'
        ] );



        App\Models\ilceler::create( [
            'id'=>297,
            'il_id'=>23,
            'ilce_ad'=>'Maden'
        ] );



        App\Models\ilceler::create( [
            'id'=>298,
            'il_id'=>23,
            'ilce_ad'=>'Palu'
        ] );



        App\Models\ilceler::create( [
            'id'=>299,
            'il_id'=>23,
            'ilce_ad'=>'Sivrice'
        ] );



        App\Models\ilceler::create( [
            'id'=>300,
            'il_id'=>24,
            'ilce_ad'=>'Çayırlı'
        ] );



        App\Models\ilceler::create( [
            'id'=>301,
            'il_id'=>24,
            'ilce_ad'=>'Erzincan'
        ] );



        App\Models\ilceler::create( [
            'id'=>302,
            'il_id'=>24,
            'ilce_ad'=>'İliç(Ilıç)'
        ] );



        App\Models\ilceler::create( [
            'id'=>303,
            'il_id'=>24,
            'ilce_ad'=>'Kemah'
        ] );



        App\Models\ilceler::create( [
            'id'=>304,
            'il_id'=>24,
            'ilce_ad'=>'Kemaliye'
        ] );



        App\Models\ilceler::create( [
            'id'=>305,
            'il_id'=>24,
            'ilce_ad'=>'Otlukbeli'
        ] );



        App\Models\ilceler::create( [
            'id'=>306,
            'il_id'=>24,
            'ilce_ad'=>'Refahiye'
        ] );



        App\Models\ilceler::create( [
            'id'=>307,
            'il_id'=>24,
            'ilce_ad'=>'Tercan'
        ] );



        App\Models\ilceler::create( [
            'id'=>308,
            'il_id'=>24,
            'ilce_ad'=>'Üzümlü'
        ] );



        App\Models\ilceler::create( [
            'id'=>309,
            'il_id'=>25,
            'ilce_ad'=>'Aşkale'
        ] );



        App\Models\ilceler::create( [
            'id'=>310,
            'il_id'=>25,
            'ilce_ad'=>'Aziziye(Ilıca)'
        ] );



        App\Models\ilceler::create( [
            'id'=>311,
            'il_id'=>25,
            'ilce_ad'=>'Çat'
        ] );



        App\Models\ilceler::create( [
            'id'=>312,
            'il_id'=>25,
            'ilce_ad'=>'Hınıs'
        ] );



        App\Models\ilceler::create( [
            'id'=>313,
            'il_id'=>25,
            'ilce_ad'=>'Horasan'
        ] );



        App\Models\ilceler::create( [
            'id'=>314,
            'il_id'=>25,
            'ilce_ad'=>'İspir'
        ] );



        App\Models\ilceler::create( [
            'id'=>315,
            'il_id'=>25,
            'ilce_ad'=>'Karaçoban'
        ] );



        App\Models\ilceler::create( [
            'id'=>316,
            'il_id'=>25,
            'ilce_ad'=>'Karayazı'
        ] );



        App\Models\ilceler::create( [
            'id'=>317,
            'il_id'=>25,
            'ilce_ad'=>'Köprüköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>318,
            'il_id'=>25,
            'ilce_ad'=>'Narman'
        ] );



        App\Models\ilceler::create( [
            'id'=>319,
            'il_id'=>25,
            'ilce_ad'=>'Oltu'
        ] );



        App\Models\ilceler::create( [
            'id'=>320,
            'il_id'=>25,
            'ilce_ad'=>'Olur'
        ] );



        App\Models\ilceler::create( [
            'id'=>321,
            'il_id'=>25,
            'ilce_ad'=>'Palandöken'
        ] );



        App\Models\ilceler::create( [
            'id'=>322,
            'il_id'=>25,
            'ilce_ad'=>'Pasinler'
        ] );



        App\Models\ilceler::create( [
            'id'=>323,
            'il_id'=>25,
            'ilce_ad'=>'Pazaryolu'
        ] );



        App\Models\ilceler::create( [
            'id'=>324,
            'il_id'=>25,
            'ilce_ad'=>'Şenkaya'
        ] );



        App\Models\ilceler::create( [
            'id'=>325,
            'il_id'=>25,
            'ilce_ad'=>'Tekman'
        ] );



        App\Models\ilceler::create( [
            'id'=>326,
            'il_id'=>25,
            'ilce_ad'=>'Tortum'
        ] );



        App\Models\ilceler::create( [
            'id'=>327,
            'il_id'=>25,
            'ilce_ad'=>'Uzundere'
        ] );



        App\Models\ilceler::create( [
            'id'=>328,
            'il_id'=>25,
            'ilce_ad'=>'Yakutiye'
        ] );



        App\Models\ilceler::create( [
            'id'=>329,
            'il_id'=>26,
            'ilce_ad'=>'Alpu'
        ] );



        App\Models\ilceler::create( [
            'id'=>330,
            'il_id'=>26,
            'ilce_ad'=>'Beylikova'
        ] );



        App\Models\ilceler::create( [
            'id'=>331,
            'il_id'=>26,
            'ilce_ad'=>'Çifteler'
        ] );



        App\Models\ilceler::create( [
            'id'=>332,
            'il_id'=>26,
            'ilce_ad'=>'Günyüzü'
        ] );



        App\Models\ilceler::create( [
            'id'=>333,
            'il_id'=>26,
            'ilce_ad'=>'Han'
        ] );



        App\Models\ilceler::create( [
            'id'=>334,
            'il_id'=>26,
            'ilce_ad'=>'İnönü'
        ] );



        App\Models\ilceler::create( [
            'id'=>335,
            'il_id'=>26,
            'ilce_ad'=>'Mahmudiye'
        ] );



        App\Models\ilceler::create( [
            'id'=>336,
            'il_id'=>26,
            'ilce_ad'=>'Mihalgazi'
        ] );



        App\Models\ilceler::create( [
            'id'=>337,
            'il_id'=>26,
            'ilce_ad'=>'Mihalıçcık'
        ] );



        App\Models\ilceler::create( [
            'id'=>338,
            'il_id'=>26,
            'ilce_ad'=>'ODUNPAZARI'
        ] );



        App\Models\ilceler::create( [
            'id'=>339,
            'il_id'=>26,
            'ilce_ad'=>'Sarıcakaya'
        ] );



        App\Models\ilceler::create( [
            'id'=>340,
            'il_id'=>26,
            'ilce_ad'=>'Seyitgazi'
        ] );



        App\Models\ilceler::create( [
            'id'=>341,
            'il_id'=>26,
            'ilce_ad'=>'Sivrihisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>342,
            'il_id'=>26,
            'ilce_ad'=>'Tepebaşı'
        ] );



        App\Models\ilceler::create( [
            'id'=>343,
            'il_id'=>27,
            'ilce_ad'=>'Araban'
        ] );



        App\Models\ilceler::create( [
            'id'=>344,
            'il_id'=>27,
            'ilce_ad'=>'İslahiye'
        ] );



        App\Models\ilceler::create( [
            'id'=>345,
            'il_id'=>27,
            'ilce_ad'=>'Karkamış'
        ] );



        App\Models\ilceler::create( [
            'id'=>346,
            'il_id'=>27,
            'ilce_ad'=>'Nizip'
        ] );



        App\Models\ilceler::create( [
            'id'=>347,
            'il_id'=>27,
            'ilce_ad'=>'Nurdağı'
        ] );



        App\Models\ilceler::create( [
            'id'=>348,
            'il_id'=>27,
            'ilce_ad'=>'Oğuzeli'
        ] );



        App\Models\ilceler::create( [
            'id'=>349,
            'il_id'=>27,
            'ilce_ad'=>'ŞAHİNBEY'
        ] );



        App\Models\ilceler::create( [
            'id'=>350,
            'il_id'=>27,
            'ilce_ad'=>'ŞEHİTKAMİL'
        ] );



        App\Models\ilceler::create( [
            'id'=>351,
            'il_id'=>27,
            'ilce_ad'=>'Yavuzeli'
        ] );



        App\Models\ilceler::create( [
            'id'=>352,
            'il_id'=>28,
            'ilce_ad'=>'Alucra'
        ] );



        App\Models\ilceler::create( [
            'id'=>353,
            'il_id'=>28,
            'ilce_ad'=>'Bulancak'
        ] );



        App\Models\ilceler::create( [
            'id'=>354,
            'il_id'=>28,
            'ilce_ad'=>'Çamoluk'
        ] );



        App\Models\ilceler::create( [
            'id'=>355,
            'il_id'=>28,
            'ilce_ad'=>'Çanakçı'
        ] );



        App\Models\ilceler::create( [
            'id'=>356,
            'il_id'=>28,
            'ilce_ad'=>'Dereli'
        ] );



        App\Models\ilceler::create( [
            'id'=>357,
            'il_id'=>28,
            'ilce_ad'=>'Doğankent'
        ] );



        App\Models\ilceler::create( [
            'id'=>358,
            'il_id'=>28,
            'ilce_ad'=>'Espiye'
        ] );



        App\Models\ilceler::create( [
            'id'=>359,
            'il_id'=>28,
            'ilce_ad'=>'Eynesil'
        ] );



        App\Models\ilceler::create( [
            'id'=>360,
            'il_id'=>28,
            'ilce_ad'=>'Giresun'
        ] );



        App\Models\ilceler::create( [
            'id'=>361,
            'il_id'=>28,
            'ilce_ad'=>'Görele'
        ] );



        App\Models\ilceler::create( [
            'id'=>362,
            'il_id'=>28,
            'ilce_ad'=>'Güce'
        ] );



        App\Models\ilceler::create( [
            'id'=>363,
            'il_id'=>28,
            'ilce_ad'=>'Keşap'
        ] );



        App\Models\ilceler::create( [
            'id'=>364,
            'il_id'=>28,
            'ilce_ad'=>'Piraziz'
        ] );



        App\Models\ilceler::create( [
            'id'=>365,
            'il_id'=>28,
            'ilce_ad'=>'Şebinkarahisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>366,
            'il_id'=>28,
            'ilce_ad'=>'Tirebolu'
        ] );



        App\Models\ilceler::create( [
            'id'=>367,
            'il_id'=>28,
            'ilce_ad'=>'Yağlıdere'
        ] );



        App\Models\ilceler::create( [
            'id'=>368,
            'il_id'=>29,
            'ilce_ad'=>'Gümüşhane'
        ] );



        App\Models\ilceler::create( [
            'id'=>369,
            'il_id'=>29,
            'ilce_ad'=>'Kelkit'
        ] );



        App\Models\ilceler::create( [
            'id'=>370,
            'il_id'=>29,
            'ilce_ad'=>'Köse'
        ] );



        App\Models\ilceler::create( [
            'id'=>371,
            'il_id'=>29,
            'ilce_ad'=>'Kürtün'
        ] );



        App\Models\ilceler::create( [
            'id'=>372,
            'il_id'=>29,
            'ilce_ad'=>'Şiran'
        ] );



        App\Models\ilceler::create( [
            'id'=>373,
            'il_id'=>29,
            'ilce_ad'=>'Torul'
        ] );



        App\Models\ilceler::create( [
            'id'=>374,
            'il_id'=>30,
            'ilce_ad'=>'Çukurca'
        ] );



        App\Models\ilceler::create( [
            'id'=>375,
            'il_id'=>30,
            'ilce_ad'=>'Hakkari'
        ] );



        App\Models\ilceler::create( [
            'id'=>376,
            'il_id'=>30,
            'ilce_ad'=>'Şemdinli'
        ] );



        App\Models\ilceler::create( [
            'id'=>377,
            'il_id'=>30,
            'ilce_ad'=>'Yüksekova'
        ] );



        App\Models\ilceler::create( [
            'id'=>378,
            'il_id'=>31,
            'ilce_ad'=>'Altınözü'
        ] );



        App\Models\ilceler::create( [
            'id'=>379,
            'il_id'=>31,
            'ilce_ad'=>'Antakya'
        ] );



        App\Models\ilceler::create( [
            'id'=>380,
            'il_id'=>31,
            'ilce_ad'=>'Belen'
        ] );



        App\Models\ilceler::create( [
            'id'=>381,
            'il_id'=>31,
            'ilce_ad'=>'Dörtyol'
        ] );



        App\Models\ilceler::create( [
            'id'=>382,
            'il_id'=>31,
            'ilce_ad'=>'Erzin'
        ] );



        App\Models\ilceler::create( [
            'id'=>383,
            'il_id'=>31,
            'ilce_ad'=>'Hassa'
        ] );



        App\Models\ilceler::create( [
            'id'=>384,
            'il_id'=>31,
            'ilce_ad'=>'İskenderun'
        ] );



        App\Models\ilceler::create( [
            'id'=>385,
            'il_id'=>31,
            'ilce_ad'=>'Kırıkhan'
        ] );



        App\Models\ilceler::create( [
            'id'=>386,
            'il_id'=>31,
            'ilce_ad'=>'Kumlu'
        ] );



        App\Models\ilceler::create( [
            'id'=>387,
            'il_id'=>31,
            'ilce_ad'=>'Reyhanlı'
        ] );



        App\Models\ilceler::create( [
            'id'=>388,
            'il_id'=>31,
            'ilce_ad'=>'Samandağ'
        ] );



        App\Models\ilceler::create( [
            'id'=>389,
            'il_id'=>31,
            'ilce_ad'=>'Yayladağı'
        ] );



        App\Models\ilceler::create( [
            'id'=>390,
            'il_id'=>32,
            'ilce_ad'=>'Aksu'
        ] );



        App\Models\ilceler::create( [
            'id'=>391,
            'il_id'=>32,
            'ilce_ad'=>'Atabey'
        ] );



        App\Models\ilceler::create( [
            'id'=>392,
            'il_id'=>32,
            'ilce_ad'=>'Eğridir(Eğirdir)'
        ] );



        App\Models\ilceler::create( [
            'id'=>393,
            'il_id'=>32,
            'ilce_ad'=>'Gelendost'
        ] );



        App\Models\ilceler::create( [
            'id'=>394,
            'il_id'=>32,
            'ilce_ad'=>'Gönen'
        ] );



        App\Models\ilceler::create( [
            'id'=>395,
            'il_id'=>32,
            'ilce_ad'=>'ISPARTA'
        ] );



        App\Models\ilceler::create( [
            'id'=>396,
            'il_id'=>32,
            'ilce_ad'=>'Keçiborlu'
        ] );



        App\Models\ilceler::create( [
            'id'=>397,
            'il_id'=>32,
            'ilce_ad'=>'Senirkent'
        ] );



        App\Models\ilceler::create( [
            'id'=>398,
            'il_id'=>32,
            'ilce_ad'=>'Sütçüler'
        ] );



        App\Models\ilceler::create( [
            'id'=>399,
            'il_id'=>32,
            'ilce_ad'=>'Şarkikaraağaç'
        ] );



        App\Models\ilceler::create( [
            'id'=>400,
            'il_id'=>32,
            'ilce_ad'=>'Uluborlu'
        ] );



        App\Models\ilceler::create( [
            'id'=>401,
            'il_id'=>32,
            'ilce_ad'=>'Yalvaç'
        ] );



        App\Models\ilceler::create( [
            'id'=>402,
            'il_id'=>32,
            'ilce_ad'=>'Yenişarbademli'
        ] );



        App\Models\ilceler::create( [
            'id'=>403,
            'il_id'=>33,
            'ilce_ad'=>'AKDENİZ'
        ] );



        App\Models\ilceler::create( [
            'id'=>404,
            'il_id'=>33,
            'ilce_ad'=>'Anamur'
        ] );



        App\Models\ilceler::create( [
            'id'=>405,
            'il_id'=>33,
            'ilce_ad'=>'Aydıncık'
        ] );



        App\Models\ilceler::create( [
            'id'=>406,
            'il_id'=>33,
            'ilce_ad'=>'Bozyazı'
        ] );



        App\Models\ilceler::create( [
            'id'=>407,
            'il_id'=>33,
            'ilce_ad'=>'Çamlıyayla'
        ] );



        App\Models\ilceler::create( [
            'id'=>408,
            'il_id'=>33,
            'ilce_ad'=>'ERDEMLİ'
        ] );



        App\Models\ilceler::create( [
            'id'=>409,
            'il_id'=>33,
            'ilce_ad'=>'Gülnar (Gülpınar)'
        ] );



        App\Models\ilceler::create( [
            'id'=>410,
            'il_id'=>33,
            'ilce_ad'=>'Mezitli'
        ] );



        App\Models\ilceler::create( [
            'id'=>411,
            'il_id'=>33,
            'ilce_ad'=>'Mut'
        ] );



        App\Models\ilceler::create( [
            'id'=>412,
            'il_id'=>33,
            'ilce_ad'=>'Silifke'
        ] );



        App\Models\ilceler::create( [
            'id'=>413,
            'il_id'=>33,
            'ilce_ad'=>'Tarsus'
        ] );



        App\Models\ilceler::create( [
            'id'=>414,
            'il_id'=>33,
            'ilce_ad'=>'TOROSLAR'
        ] );



        App\Models\ilceler::create( [
            'id'=>415,
            'il_id'=>33,
            'ilce_ad'=>'Yenişehir'
        ] );



        App\Models\ilceler::create( [
            'id'=>416,
            'il_id'=>34,
            'ilce_ad'=>'Adalar'
        ] );



        App\Models\ilceler::create( [
            'id'=>417,
            'il_id'=>34,
            'ilce_ad'=>'Arnavutköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>418,
            'il_id'=>34,
            'ilce_ad'=>'Ataşehir'
        ] );



        App\Models\ilceler::create( [
            'id'=>419,
            'il_id'=>34,
            'ilce_ad'=>'AVCILAR'
        ] );



        App\Models\ilceler::create( [
            'id'=>420,
            'il_id'=>34,
            'ilce_ad'=>'BAĞCILAR'
        ] );



        App\Models\ilceler::create( [
            'id'=>421,
            'il_id'=>34,
            'ilce_ad'=>'BAHÇELİEVLER'
        ] );



        App\Models\ilceler::create( [
            'id'=>422,
            'il_id'=>34,
            'ilce_ad'=>'Bakırköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>423,
            'il_id'=>34,
            'ilce_ad'=>'Başakşehir'
        ] );



        App\Models\ilceler::create( [
            'id'=>424,
            'il_id'=>34,
            'ilce_ad'=>'BAYRAMPAŞA'
        ] );



        App\Models\ilceler::create( [
            'id'=>425,
            'il_id'=>34,
            'ilce_ad'=>'BEŞİKTAŞ'
        ] );



        App\Models\ilceler::create( [
            'id'=>426,
            'il_id'=>34,
            'ilce_ad'=>'Beykoz'
        ] );



        App\Models\ilceler::create( [
            'id'=>427,
            'il_id'=>34,
            'ilce_ad'=>'BEYLİKDÜZÜ'
        ] );



        App\Models\ilceler::create( [
            'id'=>428,
            'il_id'=>34,
            'ilce_ad'=>'BEYOĞLU'
        ] );



        App\Models\ilceler::create( [
            'id'=>429,
            'il_id'=>34,
            'ilce_ad'=>'BÜYÜKÇEKMECE'
        ] );



        App\Models\ilceler::create( [
            'id'=>430,
            'il_id'=>34,
            'ilce_ad'=>'Çatalca'
        ] );



        App\Models\ilceler::create( [
            'id'=>431,
            'il_id'=>34,
            'ilce_ad'=>'Çekmeköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>432,
            'il_id'=>34,
            'ilce_ad'=>'ESENLER'
        ] );



        App\Models\ilceler::create( [
            'id'=>433,
            'il_id'=>34,
            'ilce_ad'=>'ESENYURT'
        ] );



        App\Models\ilceler::create( [
            'id'=>434,
            'il_id'=>34,
            'ilce_ad'=>'EYÜP'
        ] );



        App\Models\ilceler::create( [
            'id'=>435,
            'il_id'=>34,
            'ilce_ad'=>'FATİH'
        ] );



        App\Models\ilceler::create( [
            'id'=>436,
            'il_id'=>34,
            'ilce_ad'=>'GAZİOSMANPAŞA'
        ] );



        App\Models\ilceler::create( [
            'id'=>437,
            'il_id'=>34,
            'ilce_ad'=>'GÜNGÖREN'
        ] );



        App\Models\ilceler::create( [
            'id'=>438,
            'il_id'=>34,
            'ilce_ad'=>'KADIKÖY'
        ] );



        App\Models\ilceler::create( [
            'id'=>439,
            'il_id'=>34,
            'ilce_ad'=>'KAĞITHANE'
        ] );



        App\Models\ilceler::create( [
            'id'=>440,
            'il_id'=>34,
            'ilce_ad'=>'KARTAL'
        ] );



        App\Models\ilceler::create( [
            'id'=>441,
            'il_id'=>34,
            'ilce_ad'=>'KÜÇÜKÇEKMECE'
        ] );



        App\Models\ilceler::create( [
            'id'=>442,
            'il_id'=>34,
            'ilce_ad'=>'MALTEPE'
        ] );



        App\Models\ilceler::create( [
            'id'=>443,
            'il_id'=>34,
            'ilce_ad'=>'PENDİK'
        ] );



        App\Models\ilceler::create( [
            'id'=>444,
            'il_id'=>34,
            'ilce_ad'=>'Sancaktepe'
        ] );



        App\Models\ilceler::create( [
            'id'=>445,
            'il_id'=>34,
            'ilce_ad'=>'SARIYER'
        ] );



        App\Models\ilceler::create( [
            'id'=>446,
            'il_id'=>34,
            'ilce_ad'=>'Silivri'
        ] );



        App\Models\ilceler::create( [
            'id'=>447,
            'il_id'=>34,
            'ilce_ad'=>'SULTANBEYLİ'
        ] );



        App\Models\ilceler::create( [
            'id'=>448,
            'il_id'=>34,
            'ilce_ad'=>'SULTANGAZİ'
        ] );



        App\Models\ilceler::create( [
            'id'=>449,
            'il_id'=>34,
            'ilce_ad'=>'Şile'
        ] );



        App\Models\ilceler::create( [
            'id'=>450,
            'il_id'=>34,
            'ilce_ad'=>'ŞİŞLİ'
        ] );



        App\Models\ilceler::create( [
            'id'=>451,
            'il_id'=>34,
            'ilce_ad'=>'Tuzla'
        ] );



        App\Models\ilceler::create( [
            'id'=>452,
            'il_id'=>34,
            'ilce_ad'=>'ÜMRANİYE'
        ] );



        App\Models\ilceler::create( [
            'id'=>453,
            'il_id'=>34,
            'ilce_ad'=>'Üsküdar'
        ] );



        App\Models\ilceler::create( [
            'id'=>454,
            'il_id'=>34,
            'ilce_ad'=>'Zeytinburnu'
        ] );



        App\Models\ilceler::create( [
            'id'=>455,
            'il_id'=>35,
            'ilce_ad'=>'ALİAĞA'
        ] );



        App\Models\ilceler::create( [
            'id'=>456,
            'il_id'=>35,
            'ilce_ad'=>'Balçova'
        ] );



        App\Models\ilceler::create( [
            'id'=>457,
            'il_id'=>35,
            'ilce_ad'=>'Bayındır'
        ] );



        App\Models\ilceler::create( [
            'id'=>458,
            'il_id'=>35,
            'ilce_ad'=>'BAYRAKLI'
        ] );



        App\Models\ilceler::create( [
            'id'=>459,
            'il_id'=>35,
            'ilce_ad'=>'Bergama'
        ] );



        App\Models\ilceler::create( [
            'id'=>460,
            'il_id'=>35,
            'ilce_ad'=>'Beydağ'
        ] );



        App\Models\ilceler::create( [
            'id'=>461,
            'il_id'=>35,
            'ilce_ad'=>'BORNOVA'
        ] );



        App\Models\ilceler::create( [
            'id'=>462,
            'il_id'=>35,
            'ilce_ad'=>'BUCA'
        ] );



        App\Models\ilceler::create( [
            'id'=>463,
            'il_id'=>35,
            'ilce_ad'=>'Cumaovası(Menderes)'
        ] );



        App\Models\ilceler::create( [
            'id'=>464,
            'il_id'=>35,
            'ilce_ad'=>'Çeşme'
        ] );



        App\Models\ilceler::create( [
            'id'=>465,
            'il_id'=>35,
            'ilce_ad'=>'Çiğli'
        ] );



        App\Models\ilceler::create( [
            'id'=>466,
            'il_id'=>35,
            'ilce_ad'=>'Dikili'
        ] );



        App\Models\ilceler::create( [
            'id'=>467,
            'il_id'=>35,
            'ilce_ad'=>'Foça'
        ] );



        App\Models\ilceler::create( [
            'id'=>468,
            'il_id'=>35,
            'ilce_ad'=>'Gaziemir'
        ] );



        App\Models\ilceler::create( [
            'id'=>469,
            'il_id'=>35,
            'ilce_ad'=>'Güzelbahçe'
        ] );



        App\Models\ilceler::create( [
            'id'=>470,
            'il_id'=>35,
            'ilce_ad'=>'Karabağlar'
        ] );



        App\Models\ilceler::create( [
            'id'=>471,
            'il_id'=>35,
            'ilce_ad'=>'Karaburun'
        ] );



        App\Models\ilceler::create( [
            'id'=>472,
            'il_id'=>35,
            'ilce_ad'=>'KARŞIYAKA'
        ] );



        App\Models\ilceler::create( [
            'id'=>473,
            'il_id'=>35,
            'ilce_ad'=>'Kemalpaşa'
        ] );



        App\Models\ilceler::create( [
            'id'=>474,
            'il_id'=>35,
            'ilce_ad'=>'Kınık'
        ] );



        App\Models\ilceler::create( [
            'id'=>475,
            'il_id'=>35,
            'ilce_ad'=>'Kiraz'
        ] );



        App\Models\ilceler::create( [
            'id'=>476,
            'il_id'=>35,
            'ilce_ad'=>'KONAK'
        ] );



        App\Models\ilceler::create( [
            'id'=>477,
            'il_id'=>35,
            'ilce_ad'=>'Menemen'
        ] );



        App\Models\ilceler::create( [
            'id'=>478,
            'il_id'=>35,
            'ilce_ad'=>'Narlıdere'
        ] );



        App\Models\ilceler::create( [
            'id'=>479,
            'il_id'=>35,
            'ilce_ad'=>'Ödemiş'
        ] );



        App\Models\ilceler::create( [
            'id'=>480,
            'il_id'=>35,
            'ilce_ad'=>'Seferihisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>481,
            'il_id'=>35,
            'ilce_ad'=>'Selçuk'
        ] );



        App\Models\ilceler::create( [
            'id'=>482,
            'il_id'=>35,
            'ilce_ad'=>'Tire'
        ] );



        App\Models\ilceler::create( [
            'id'=>483,
            'il_id'=>35,
            'ilce_ad'=>'Torbalı'
        ] );



        App\Models\ilceler::create( [
            'id'=>484,
            'il_id'=>35,
            'ilce_ad'=>'Urla'
        ] );



        App\Models\ilceler::create( [
            'id'=>485,
            'il_id'=>36,
            'ilce_ad'=>'Akyaka'
        ] );



        App\Models\ilceler::create( [
            'id'=>486,
            'il_id'=>36,
            'ilce_ad'=>'Arpaçay'
        ] );



        App\Models\ilceler::create( [
            'id'=>487,
            'il_id'=>36,
            'ilce_ad'=>'Digor'
        ] );



        App\Models\ilceler::create( [
            'id'=>488,
            'il_id'=>36,
            'ilce_ad'=>'Kağızman'
        ] );



        App\Models\ilceler::create( [
            'id'=>489,
            'il_id'=>36,
            'ilce_ad'=>'Kars'
        ] );



        App\Models\ilceler::create( [
            'id'=>490,
            'il_id'=>36,
            'ilce_ad'=>'Sarıkamış'
        ] );



        App\Models\ilceler::create( [
            'id'=>491,
            'il_id'=>36,
            'ilce_ad'=>'Selim'
        ] );



        App\Models\ilceler::create( [
            'id'=>492,
            'il_id'=>36,
            'ilce_ad'=>'Susuz'
        ] );



        App\Models\ilceler::create( [
            'id'=>493,
            'il_id'=>37,
            'ilce_ad'=>'Abana'
        ] );



        App\Models\ilceler::create( [
            'id'=>494,
            'il_id'=>37,
            'ilce_ad'=>'Ağlı'
        ] );



        App\Models\ilceler::create( [
            'id'=>495,
            'il_id'=>37,
            'ilce_ad'=>'Araç'
        ] );



        App\Models\ilceler::create( [
            'id'=>496,
            'il_id'=>37,
            'ilce_ad'=>'Azdavay'
        ] );



        App\Models\ilceler::create( [
            'id'=>497,
            'il_id'=>37,
            'ilce_ad'=>'Bozkurt'
        ] );



        App\Models\ilceler::create( [
            'id'=>498,
            'il_id'=>37,
            'ilce_ad'=>'Cide'
        ] );



        App\Models\ilceler::create( [
            'id'=>499,
            'il_id'=>37,
            'ilce_ad'=>'Çatalzeytin'
        ] );



        App\Models\ilceler::create( [
            'id'=>500,
            'il_id'=>37,
            'ilce_ad'=>'Daday'
        ] );



        App\Models\ilceler::create( [
            'id'=>501,
            'il_id'=>37,
            'ilce_ad'=>'Devrekani'
        ] );



        App\Models\ilceler::create( [
            'id'=>502,
            'il_id'=>37,
            'ilce_ad'=>'Doğanyurt'
        ] );



        App\Models\ilceler::create( [
            'id'=>503,
            'il_id'=>37,
            'ilce_ad'=>'Hanönü(Gökçeağaç)'
        ] );



        App\Models\ilceler::create( [
            'id'=>504,
            'il_id'=>37,
            'ilce_ad'=>'İhsangazi'
        ] );



        App\Models\ilceler::create( [
            'id'=>505,
            'il_id'=>37,
            'ilce_ad'=>'İnebolu'
        ] );



        App\Models\ilceler::create( [
            'id'=>506,
            'il_id'=>37,
            'ilce_ad'=>'Kastamonu'
        ] );



        App\Models\ilceler::create( [
            'id'=>507,
            'il_id'=>37,
            'ilce_ad'=>'Küre'
        ] );



        App\Models\ilceler::create( [
            'id'=>508,
            'il_id'=>37,
            'ilce_ad'=>'Pınarbaşı'
        ] );



        App\Models\ilceler::create( [
            'id'=>509,
            'il_id'=>37,
            'ilce_ad'=>'Seydiler'
        ] );



        App\Models\ilceler::create( [
            'id'=>510,
            'il_id'=>37,
            'ilce_ad'=>'Şenpazar'
        ] );



        App\Models\ilceler::create( [
            'id'=>511,
            'il_id'=>37,
            'ilce_ad'=>'Taşköprü'
        ] );



        App\Models\ilceler::create( [
            'id'=>512,
            'il_id'=>37,
            'ilce_ad'=>'Tosya'
        ] );



        App\Models\ilceler::create( [
            'id'=>513,
            'il_id'=>38,
            'ilce_ad'=>'Akkışla'
        ] );



        App\Models\ilceler::create( [
            'id'=>514,
            'il_id'=>38,
            'ilce_ad'=>'Bünyan'
        ] );



        App\Models\ilceler::create( [
            'id'=>515,
            'il_id'=>38,
            'ilce_ad'=>'Develi'
        ] );



        App\Models\ilceler::create( [
            'id'=>516,
            'il_id'=>38,
            'ilce_ad'=>'Felahiye'
        ] );



        App\Models\ilceler::create( [
            'id'=>517,
            'il_id'=>38,
            'ilce_ad'=>'Hacılar'
        ] );



        App\Models\ilceler::create( [
            'id'=>518,
            'il_id'=>38,
            'ilce_ad'=>'İncesu'
        ] );



        App\Models\ilceler::create( [
            'id'=>519,
            'il_id'=>38,
            'ilce_ad'=>'Kocasinan'
        ] );



        App\Models\ilceler::create( [
            'id'=>520,
            'il_id'=>38,
            'ilce_ad'=>'MELİKGAZİ'
        ] );



        App\Models\ilceler::create( [
            'id'=>521,
            'il_id'=>38,
            'ilce_ad'=>'Özvatan(Çukur)'
        ] );



        App\Models\ilceler::create( [
            'id'=>522,
            'il_id'=>38,
            'ilce_ad'=>'Pınarbaşı'
        ] );



        App\Models\ilceler::create( [
            'id'=>523,
            'il_id'=>38,
            'ilce_ad'=>'Sarıoğlan'
        ] );



        App\Models\ilceler::create( [
            'id'=>524,
            'il_id'=>38,
            'ilce_ad'=>'Sarız'
        ] );



        App\Models\ilceler::create( [
            'id'=>525,
            'il_id'=>38,
            'ilce_ad'=>'Talas'
        ] );



        App\Models\ilceler::create( [
            'id'=>526,
            'il_id'=>38,
            'ilce_ad'=>'Tomarza'
        ] );



        App\Models\ilceler::create( [
            'id'=>527,
            'il_id'=>38,
            'ilce_ad'=>'Yahyalı'
        ] );



        App\Models\ilceler::create( [
            'id'=>528,
            'il_id'=>38,
            'ilce_ad'=>'Yeşilhisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>529,
            'il_id'=>39,
            'ilce_ad'=>'Babaeski'
        ] );



        App\Models\ilceler::create( [
            'id'=>530,
            'il_id'=>39,
            'ilce_ad'=>'Demirköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>531,
            'il_id'=>39,
            'ilce_ad'=>'Kırklareli'
        ] );



        App\Models\ilceler::create( [
            'id'=>532,
            'il_id'=>39,
            'ilce_ad'=>'Kofçaz'
        ] );



        App\Models\ilceler::create( [
            'id'=>533,
            'il_id'=>39,
            'ilce_ad'=>'Lüleburgaz'
        ] );



        App\Models\ilceler::create( [
            'id'=>534,
            'il_id'=>39,
            'ilce_ad'=>'Pehlivanköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>535,
            'il_id'=>39,
            'ilce_ad'=>'Pınarhisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>536,
            'il_id'=>39,
            'ilce_ad'=>'Vize'
        ] );



        App\Models\ilceler::create( [
            'id'=>537,
            'il_id'=>40,
            'ilce_ad'=>'Akçakent'
        ] );



        App\Models\ilceler::create( [
            'id'=>538,
            'il_id'=>40,
            'ilce_ad'=>'Akpınar'
        ] );



        App\Models\ilceler::create( [
            'id'=>539,
            'il_id'=>40,
            'ilce_ad'=>'Boztepe'
        ] );



        App\Models\ilceler::create( [
            'id'=>540,
            'il_id'=>40,
            'ilce_ad'=>'Çiçekdağı'
        ] );



        App\Models\ilceler::create( [
            'id'=>541,
            'il_id'=>40,
            'ilce_ad'=>'Kaman'
        ] );



        App\Models\ilceler::create( [
            'id'=>542,
            'il_id'=>40,
            'ilce_ad'=>'KIRŞEHİR'
        ] );



        App\Models\ilceler::create( [
            'id'=>543,
            'il_id'=>40,
            'ilce_ad'=>'Mucur'
        ] );



        App\Models\ilceler::create( [
            'id'=>544,
            'il_id'=>41,
            'ilce_ad'=>'Başiskele'
        ] );



        App\Models\ilceler::create( [
            'id'=>545,
            'il_id'=>41,
            'ilce_ad'=>'Çayırova'
        ] );



        App\Models\ilceler::create( [
            'id'=>546,
            'il_id'=>41,
            'ilce_ad'=>'Darıca'
        ] );



        App\Models\ilceler::create( [
            'id'=>547,
            'il_id'=>41,
            'ilce_ad'=>'Derince'
        ] );



        App\Models\ilceler::create( [
            'id'=>548,
            'il_id'=>41,
            'ilce_ad'=>'Dilovası'
        ] );



        App\Models\ilceler::create( [
            'id'=>549,
            'il_id'=>41,
            'ilce_ad'=>'Gebze'
        ] );



        App\Models\ilceler::create( [
            'id'=>550,
            'il_id'=>41,
            'ilce_ad'=>'Gölcük'
        ] );



        App\Models\ilceler::create( [
            'id'=>551,
            'il_id'=>41,
            'ilce_ad'=>'İzmit'
        ] );



        App\Models\ilceler::create( [
            'id'=>552,
            'il_id'=>41,
            'ilce_ad'=>'Kandıra'
        ] );



        App\Models\ilceler::create( [
            'id'=>553,
            'il_id'=>41,
            'ilce_ad'=>'Karamürsel'
        ] );



        App\Models\ilceler::create( [
            'id'=>554,
            'il_id'=>41,
            'ilce_ad'=>'Kartepe'
        ] );



        App\Models\ilceler::create( [
            'id'=>555,
            'il_id'=>41,
            'ilce_ad'=>'Tütünçiftlik'
        ] );



        App\Models\ilceler::create( [
            'id'=>556,
            'il_id'=>42,
            'ilce_ad'=>'Ahırlı'
        ] );



        App\Models\ilceler::create( [
            'id'=>557,
            'il_id'=>42,
            'ilce_ad'=>'Akören'
        ] );



        App\Models\ilceler::create( [
            'id'=>558,
            'il_id'=>42,
            'ilce_ad'=>'Akşehir'
        ] );



        App\Models\ilceler::create( [
            'id'=>559,
            'il_id'=>42,
            'ilce_ad'=>'Altınekin'
        ] );



        App\Models\ilceler::create( [
            'id'=>560,
            'il_id'=>42,
            'ilce_ad'=>'Beyşehir'
        ] );



        App\Models\ilceler::create( [
            'id'=>561,
            'il_id'=>42,
            'ilce_ad'=>'Bozkır'
        ] );



        App\Models\ilceler::create( [
            'id'=>562,
            'il_id'=>42,
            'ilce_ad'=>'Cihanbeyli'
        ] );



        App\Models\ilceler::create( [
            'id'=>563,
            'il_id'=>42,
            'ilce_ad'=>'Çeltik'
        ] );



        App\Models\ilceler::create( [
            'id'=>564,
            'il_id'=>42,
            'ilce_ad'=>'Çumra'
        ] );



        App\Models\ilceler::create( [
            'id'=>565,
            'il_id'=>42,
            'ilce_ad'=>'Derbent'
        ] );



        App\Models\ilceler::create( [
            'id'=>566,
            'il_id'=>42,
            'ilce_ad'=>'Derebucak'
        ] );



        App\Models\ilceler::create( [
            'id'=>567,
            'il_id'=>42,
            'ilce_ad'=>'Doğanhisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>568,
            'il_id'=>42,
            'ilce_ad'=>'Emirgazi'
        ] );



        App\Models\ilceler::create( [
            'id'=>569,
            'il_id'=>42,
            'ilce_ad'=>'EREĞLİ'
        ] );



        App\Models\ilceler::create( [
            'id'=>570,
            'il_id'=>42,
            'ilce_ad'=>'Güneysınır'
        ] );



        App\Models\ilceler::create( [
            'id'=>571,
            'il_id'=>42,
            'ilce_ad'=>'Hadim'
        ] );



        App\Models\ilceler::create( [
            'id'=>572,
            'il_id'=>42,
            'ilce_ad'=>'Halkapınar'
        ] );



        App\Models\ilceler::create( [
            'id'=>573,
            'il_id'=>42,
            'ilce_ad'=>'Hüyük'
        ] );



        App\Models\ilceler::create( [
            'id'=>574,
            'il_id'=>42,
            'ilce_ad'=>'Ilgın'
        ] );



        App\Models\ilceler::create( [
            'id'=>575,
            'il_id'=>42,
            'ilce_ad'=>'Kadınhanı'
        ] );



        App\Models\ilceler::create( [
            'id'=>576,
            'il_id'=>42,
            'ilce_ad'=>'Karapınar'
        ] );



        App\Models\ilceler::create( [
            'id'=>577,
            'il_id'=>42,
            'ilce_ad'=>'KARATAY'
        ] );



        App\Models\ilceler::create( [
            'id'=>578,
            'il_id'=>42,
            'ilce_ad'=>'Kulu'
        ] );



        App\Models\ilceler::create( [
            'id'=>579,
            'il_id'=>42,
            'ilce_ad'=>'Meram'
        ] );



        App\Models\ilceler::create( [
            'id'=>580,
            'il_id'=>42,
            'ilce_ad'=>'Sarayönü'
        ] );



        App\Models\ilceler::create( [
            'id'=>581,
            'il_id'=>42,
            'ilce_ad'=>'SELÇUKLU'
        ] );



        App\Models\ilceler::create( [
            'id'=>582,
            'il_id'=>42,
            'ilce_ad'=>'Seydişehir'
        ] );



        App\Models\ilceler::create( [
            'id'=>583,
            'il_id'=>42,
            'ilce_ad'=>'Taşkent'
        ] );



        App\Models\ilceler::create( [
            'id'=>584,
            'il_id'=>42,
            'ilce_ad'=>'Tuzlukçu'
        ] );



        App\Models\ilceler::create( [
            'id'=>585,
            'il_id'=>42,
            'ilce_ad'=>'Yalıhüyük'
        ] );



        App\Models\ilceler::create( [
            'id'=>586,
            'il_id'=>42,
            'ilce_ad'=>'Yunak'
        ] );



        App\Models\ilceler::create( [
            'id'=>587,
            'il_id'=>43,
            'ilce_ad'=>'Altıntaş'
        ] );



        App\Models\ilceler::create( [
            'id'=>588,
            'il_id'=>43,
            'ilce_ad'=>'Aslanapa'
        ] );



        App\Models\ilceler::create( [
            'id'=>589,
            'il_id'=>43,
            'ilce_ad'=>'Çavdarhisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>590,
            'il_id'=>43,
            'ilce_ad'=>'Domaniç'
        ] );



        App\Models\ilceler::create( [
            'id'=>591,
            'il_id'=>43,
            'ilce_ad'=>'Dumlupınar'
        ] );



        App\Models\ilceler::create( [
            'id'=>592,
            'il_id'=>43,
            'ilce_ad'=>'Emet'
        ] );



        App\Models\ilceler::create( [
            'id'=>593,
            'il_id'=>43,
            'ilce_ad'=>'Gediz'
        ] );



        App\Models\ilceler::create( [
            'id'=>594,
            'il_id'=>43,
            'ilce_ad'=>'Hisarcık'
        ] );



        App\Models\ilceler::create( [
            'id'=>595,
            'il_id'=>43,
            'ilce_ad'=>'KÜTAHYA'
        ] );



        App\Models\ilceler::create( [
            'id'=>596,
            'il_id'=>43,
            'ilce_ad'=>'Pazarlar'
        ] );



        App\Models\ilceler::create( [
            'id'=>597,
            'il_id'=>43,
            'ilce_ad'=>'Simav'
        ] );



        App\Models\ilceler::create( [
            'id'=>598,
            'il_id'=>43,
            'ilce_ad'=>'Şaphane'
        ] );



        App\Models\ilceler::create( [
            'id'=>599,
            'il_id'=>43,
            'ilce_ad'=>'Tavşanlı'
        ] );



        App\Models\ilceler::create( [
            'id'=>600,
            'il_id'=>43,
            'ilce_ad'=>'Tunçbilek'
        ] );



        App\Models\ilceler::create( [
            'id'=>601,
            'il_id'=>44,
            'ilce_ad'=>'Akçadağ'
        ] );



        App\Models\ilceler::create( [
            'id'=>602,
            'il_id'=>44,
            'ilce_ad'=>'Arapkir'
        ] );



        App\Models\ilceler::create( [
            'id'=>603,
            'il_id'=>44,
            'ilce_ad'=>'Arguvan'
        ] );



        App\Models\ilceler::create( [
            'id'=>604,
            'il_id'=>44,
            'ilce_ad'=>'Battalgazi'
        ] );



        App\Models\ilceler::create( [
            'id'=>605,
            'il_id'=>44,
            'ilce_ad'=>'Darende'
        ] );



        App\Models\ilceler::create( [
            'id'=>606,
            'il_id'=>44,
            'ilce_ad'=>'Doğanşehir'
        ] );



        App\Models\ilceler::create( [
            'id'=>607,
            'il_id'=>44,
            'ilce_ad'=>'Doğanyol'
        ] );



        App\Models\ilceler::create( [
            'id'=>608,
            'il_id'=>44,
            'ilce_ad'=>'Hekimhan'
        ] );



        App\Models\ilceler::create( [
            'id'=>609,
            'il_id'=>44,
            'ilce_ad'=>'Kale'
        ] );



        App\Models\ilceler::create( [
            'id'=>610,
            'il_id'=>44,
            'ilce_ad'=>'Kuluncak'
        ] );



        App\Models\ilceler::create( [
            'id'=>611,
            'il_id'=>44,
            'ilce_ad'=>'Malatya'
        ] );



        App\Models\ilceler::create( [
            'id'=>612,
            'il_id'=>44,
            'ilce_ad'=>'Pötürge'
        ] );



        App\Models\ilceler::create( [
            'id'=>613,
            'il_id'=>44,
            'ilce_ad'=>'Yazıhan'
        ] );



        App\Models\ilceler::create( [
            'id'=>614,
            'il_id'=>44,
            'ilce_ad'=>'YEŞİLYURT'
        ] );



        App\Models\ilceler::create( [
            'id'=>615,
            'il_id'=>45,
            'ilce_ad'=>'Ahmetli'
        ] );



        App\Models\ilceler::create( [
            'id'=>616,
            'il_id'=>45,
            'ilce_ad'=>'Akhisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>617,
            'il_id'=>45,
            'ilce_ad'=>'Alaşehir'
        ] );



        App\Models\ilceler::create( [
            'id'=>618,
            'il_id'=>45,
            'ilce_ad'=>'Demirci'
        ] );



        App\Models\ilceler::create( [
            'id'=>619,
            'il_id'=>45,
            'ilce_ad'=>'Gölmarmara'
        ] );



        App\Models\ilceler::create( [
            'id'=>620,
            'il_id'=>45,
            'ilce_ad'=>'Gördes'
        ] );



        App\Models\ilceler::create( [
            'id'=>621,
            'il_id'=>45,
            'ilce_ad'=>'Kırkağaç'
        ] );



        App\Models\ilceler::create( [
            'id'=>622,
            'il_id'=>45,
            'ilce_ad'=>'Köprübaşı'
        ] );



        App\Models\ilceler::create( [
            'id'=>623,
            'il_id'=>45,
            'ilce_ad'=>'Kula'
        ] );



        App\Models\ilceler::create( [
            'id'=>624,
            'il_id'=>45,
            'ilce_ad'=>'Manisa'
        ] );



        App\Models\ilceler::create( [
            'id'=>625,
            'il_id'=>45,
            'ilce_ad'=>'Salihli'
        ] );



        App\Models\ilceler::create( [
            'id'=>626,
            'il_id'=>45,
            'ilce_ad'=>'Sarıgöl'
        ] );



        App\Models\ilceler::create( [
            'id'=>627,
            'il_id'=>45,
            'ilce_ad'=>'Saruhanlı'
        ] );



        App\Models\ilceler::create( [
            'id'=>628,
            'il_id'=>45,
            'ilce_ad'=>'Selendi'
        ] );



        App\Models\ilceler::create( [
            'id'=>629,
            'il_id'=>45,
            'ilce_ad'=>'Soma'
        ] );



        App\Models\ilceler::create( [
            'id'=>630,
            'il_id'=>45,
            'ilce_ad'=>'Turgutlu'
        ] );



        App\Models\ilceler::create( [
            'id'=>631,
            'il_id'=>46,
            'ilce_ad'=>'Afşin'
        ] );



        App\Models\ilceler::create( [
            'id'=>632,
            'il_id'=>46,
            'ilce_ad'=>'Andırın'
        ] );



        App\Models\ilceler::create( [
            'id'=>633,
            'il_id'=>46,
            'ilce_ad'=>'Çağlayancerit'
        ] );



        App\Models\ilceler::create( [
            'id'=>634,
            'il_id'=>46,
            'ilce_ad'=>'Ekinözü'
        ] );



        App\Models\ilceler::create( [
            'id'=>635,
            'il_id'=>46,
            'ilce_ad'=>'Elbistan'
        ] );



        App\Models\ilceler::create( [
            'id'=>636,
            'il_id'=>46,
            'ilce_ad'=>'Göksun'
        ] );



        App\Models\ilceler::create( [
            'id'=>637,
            'il_id'=>46,
            'ilce_ad'=>'Kahramanmaraş'
        ] );



        App\Models\ilceler::create( [
            'id'=>638,
            'il_id'=>46,
            'ilce_ad'=>'Nurhak'
        ] );



        App\Models\ilceler::create( [
            'id'=>639,
            'il_id'=>46,
            'ilce_ad'=>'Pazarcık'
        ] );



        App\Models\ilceler::create( [
            'id'=>640,
            'il_id'=>46,
            'ilce_ad'=>'Türkoğlu'
        ] );



        App\Models\ilceler::create( [
            'id'=>641,
            'il_id'=>47,
            'ilce_ad'=>'Dargeçit'
        ] );



        App\Models\ilceler::create( [
            'id'=>642,
            'il_id'=>47,
            'ilce_ad'=>'Derik'
        ] );



        App\Models\ilceler::create( [
            'id'=>643,
            'il_id'=>47,
            'ilce_ad'=>'Kızıltepe'
        ] );



        App\Models\ilceler::create( [
            'id'=>644,
            'il_id'=>47,
            'ilce_ad'=>'Mardin'
        ] );



        App\Models\ilceler::create( [
            'id'=>645,
            'il_id'=>47,
            'ilce_ad'=>'Mazıdağı'
        ] );



        App\Models\ilceler::create( [
            'id'=>646,
            'il_id'=>47,
            'ilce_ad'=>'Midyat(Estel)'
        ] );



        App\Models\ilceler::create( [
            'id'=>647,
            'il_id'=>47,
            'ilce_ad'=>'Nusaybin'
        ] );



        App\Models\ilceler::create( [
            'id'=>648,
            'il_id'=>47,
            'ilce_ad'=>'Ömerli'
        ] );



        App\Models\ilceler::create( [
            'id'=>649,
            'il_id'=>47,
            'ilce_ad'=>'Savur'
        ] );



        App\Models\ilceler::create( [
            'id'=>650,
            'il_id'=>47,
            'ilce_ad'=>'Yeşilli'
        ] );



        App\Models\ilceler::create( [
            'id'=>651,
            'il_id'=>48,
            'ilce_ad'=>'Bodrum'
        ] );



        App\Models\ilceler::create( [
            'id'=>652,
            'il_id'=>48,
            'ilce_ad'=>'Dalaman'
        ] );



        App\Models\ilceler::create( [
            'id'=>653,
            'il_id'=>48,
            'ilce_ad'=>'Datça'
        ] );



        App\Models\ilceler::create( [
            'id'=>654,
            'il_id'=>48,
            'ilce_ad'=>'Fethiye'
        ] );



        App\Models\ilceler::create( [
            'id'=>655,
            'il_id'=>48,
            'ilce_ad'=>'Kavaklıdere'
        ] );



        App\Models\ilceler::create( [
            'id'=>656,
            'il_id'=>48,
            'ilce_ad'=>'Köyceğiz'
        ] );



        App\Models\ilceler::create( [
            'id'=>657,
            'il_id'=>48,
            'ilce_ad'=>'Marmaris'
        ] );



        App\Models\ilceler::create( [
            'id'=>658,
            'il_id'=>48,
            'ilce_ad'=>'Milas'
        ] );



        App\Models\ilceler::create( [
            'id'=>659,
            'il_id'=>48,
            'ilce_ad'=>'Muğla'
        ] );



        App\Models\ilceler::create( [
            'id'=>660,
            'il_id'=>48,
            'ilce_ad'=>'Ortaca'
        ] );



        App\Models\ilceler::create( [
            'id'=>661,
            'il_id'=>48,
            'ilce_ad'=>'Ula'
        ] );



        App\Models\ilceler::create( [
            'id'=>662,
            'il_id'=>48,
            'ilce_ad'=>'Yatağan'
        ] );



        App\Models\ilceler::create( [
            'id'=>663,
            'il_id'=>49,
            'ilce_ad'=>'Bulanık'
        ] );



        App\Models\ilceler::create( [
            'id'=>664,
            'il_id'=>49,
            'ilce_ad'=>'Hasköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>665,
            'il_id'=>49,
            'ilce_ad'=>'Korkut'
        ] );



        App\Models\ilceler::create( [
            'id'=>666,
            'il_id'=>49,
            'ilce_ad'=>'Malazgirt'
        ] );



        App\Models\ilceler::create( [
            'id'=>667,
            'il_id'=>49,
            'ilce_ad'=>'Muş'
        ] );



        App\Models\ilceler::create( [
            'id'=>668,
            'il_id'=>49,
            'ilce_ad'=>'Varto'
        ] );



        App\Models\ilceler::create( [
            'id'=>669,
            'il_id'=>50,
            'ilce_ad'=>'Acıgöl'
        ] );



        App\Models\ilceler::create( [
            'id'=>670,
            'il_id'=>50,
            'ilce_ad'=>'Avanos'
        ] );



        App\Models\ilceler::create( [
            'id'=>671,
            'il_id'=>50,
            'ilce_ad'=>'Derinkuyu'
        ] );



        App\Models\ilceler::create( [
            'id'=>672,
            'il_id'=>50,
            'ilce_ad'=>'Gülşehir'
        ] );



        App\Models\ilceler::create( [
            'id'=>673,
            'il_id'=>50,
            'ilce_ad'=>'Hacıbektaş'
        ] );



        App\Models\ilceler::create( [
            'id'=>674,
            'il_id'=>50,
            'ilce_ad'=>'Kozaklı'
        ] );



        App\Models\ilceler::create( [
            'id'=>675,
            'il_id'=>50,
            'ilce_ad'=>'Nevşehir'
        ] );



        App\Models\ilceler::create( [
            'id'=>676,
            'il_id'=>50,
            'ilce_ad'=>'Ürgüp'
        ] );



        App\Models\ilceler::create( [
            'id'=>677,
            'il_id'=>51,
            'ilce_ad'=>'Altunhisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>678,
            'il_id'=>51,
            'ilce_ad'=>'Bor'
        ] );



        App\Models\ilceler::create( [
            'id'=>679,
            'il_id'=>51,
            'ilce_ad'=>'Çamardı'
        ] );



        App\Models\ilceler::create( [
            'id'=>680,
            'il_id'=>51,
            'ilce_ad'=>'Çiftlik(Özyurt)'
        ] );



        App\Models\ilceler::create( [
            'id'=>681,
            'il_id'=>51,
            'ilce_ad'=>'Niğde'
        ] );



        App\Models\ilceler::create( [
            'id'=>682,
            'il_id'=>51,
            'ilce_ad'=>'Ulukışla'
        ] );



        App\Models\ilceler::create( [
            'id'=>683,
            'il_id'=>52,
            'ilce_ad'=>'Akkuş'
        ] );



        App\Models\ilceler::create( [
            'id'=>684,
            'il_id'=>52,
            'ilce_ad'=>'Aybastı'
        ] );



        App\Models\ilceler::create( [
            'id'=>685,
            'il_id'=>52,
            'ilce_ad'=>'Çamaş'
        ] );



        App\Models\ilceler::create( [
            'id'=>686,
            'il_id'=>52,
            'ilce_ad'=>'Çatalpınar'
        ] );



        App\Models\ilceler::create( [
            'id'=>687,
            'il_id'=>52,
            'ilce_ad'=>'Çaybaşı'
        ] );



        App\Models\ilceler::create( [
            'id'=>688,
            'il_id'=>52,
            'ilce_ad'=>'Fatsa'
        ] );



        App\Models\ilceler::create( [
            'id'=>689,
            'il_id'=>52,
            'ilce_ad'=>'Gölköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>690,
            'il_id'=>52,
            'ilce_ad'=>'Gülyalı'
        ] );



        App\Models\ilceler::create( [
            'id'=>691,
            'il_id'=>52,
            'ilce_ad'=>'Gürgentepe'
        ] );



        App\Models\ilceler::create( [
            'id'=>692,
            'il_id'=>52,
            'ilce_ad'=>'İkizce'
        ] );



        App\Models\ilceler::create( [
            'id'=>693,
            'il_id'=>52,
            'ilce_ad'=>'Kabataş'
        ] );



        App\Models\ilceler::create( [
            'id'=>694,
            'il_id'=>52,
            'ilce_ad'=>'Karadüz(Kabadüz)'
        ] );



        App\Models\ilceler::create( [
            'id'=>695,
            'il_id'=>52,
            'ilce_ad'=>'Korgan'
        ] );



        App\Models\ilceler::create( [
            'id'=>696,
            'il_id'=>52,
            'ilce_ad'=>'Kumru'
        ] );



        App\Models\ilceler::create( [
            'id'=>697,
            'il_id'=>52,
            'ilce_ad'=>'Mesudiye'
        ] );



        App\Models\ilceler::create( [
            'id'=>698,
            'il_id'=>52,
            'ilce_ad'=>'Ordu'
        ] );



        App\Models\ilceler::create( [
            'id'=>699,
            'il_id'=>52,
            'ilce_ad'=>'Perşembe'
        ] );



        App\Models\ilceler::create( [
            'id'=>700,
            'il_id'=>52,
            'ilce_ad'=>'Ulubey'
        ] );



        App\Models\ilceler::create( [
            'id'=>701,
            'il_id'=>52,
            'ilce_ad'=>'ÜNYE'
        ] );



        App\Models\ilceler::create( [
            'id'=>702,
            'il_id'=>53,
            'ilce_ad'=>'ARDEŞEN'
        ] );



        App\Models\ilceler::create( [
            'id'=>703,
            'il_id'=>53,
            'ilce_ad'=>'Çamlıhemşin'
        ] );



        App\Models\ilceler::create( [
            'id'=>704,
            'il_id'=>53,
            'ilce_ad'=>'Çayeli'
        ] );



        App\Models\ilceler::create( [
            'id'=>705,
            'il_id'=>53,
            'ilce_ad'=>'Derepazarı'
        ] );



        App\Models\ilceler::create( [
            'id'=>706,
            'il_id'=>53,
            'ilce_ad'=>'Fındıklı'
        ] );



        App\Models\ilceler::create( [
            'id'=>707,
            'il_id'=>53,
            'ilce_ad'=>'Güneysu'
        ] );



        App\Models\ilceler::create( [
            'id'=>708,
            'il_id'=>53,
            'ilce_ad'=>'Hemşin'
        ] );



        App\Models\ilceler::create( [
            'id'=>709,
            'il_id'=>53,
            'ilce_ad'=>'İkizdere'
        ] );



        App\Models\ilceler::create( [
            'id'=>710,
            'il_id'=>53,
            'ilce_ad'=>'İyidere'
        ] );



        App\Models\ilceler::create( [
            'id'=>711,
            'il_id'=>53,
            'ilce_ad'=>'Kalkandere'
        ] );



        App\Models\ilceler::create( [
            'id'=>712,
            'il_id'=>53,
            'ilce_ad'=>'Pazar'
        ] );



        App\Models\ilceler::create( [
            'id'=>713,
            'il_id'=>53,
            'ilce_ad'=>'Rize'
        ] );



        App\Models\ilceler::create( [
            'id'=>714,
            'il_id'=>54,
            'ilce_ad'=>'ADAPAZARI'
        ] );



        App\Models\ilceler::create( [
            'id'=>715,
            'il_id'=>54,
            'ilce_ad'=>'Akyazı'
        ] );



        App\Models\ilceler::create( [
            'id'=>716,
            'il_id'=>54,
            'ilce_ad'=>'Arifiye'
        ] );



        App\Models\ilceler::create( [
            'id'=>717,
            'il_id'=>54,
            'ilce_ad'=>'Erenler'
        ] );



        App\Models\ilceler::create( [
            'id'=>718,
            'il_id'=>54,
            'ilce_ad'=>'Ferizli'
        ] );



        App\Models\ilceler::create( [
            'id'=>719,
            'il_id'=>54,
            'ilce_ad'=>'Geyve'
        ] );



        App\Models\ilceler::create( [
            'id'=>720,
            'il_id'=>54,
            'ilce_ad'=>'Hendek'
        ] );



        App\Models\ilceler::create( [
            'id'=>721,
            'il_id'=>54,
            'ilce_ad'=>'Karapürçek'
        ] );



        App\Models\ilceler::create( [
            'id'=>722,
            'il_id'=>54,
            'ilce_ad'=>'Karasu'
        ] );



        App\Models\ilceler::create( [
            'id'=>723,
            'il_id'=>54,
            'ilce_ad'=>'Kaynarca'
        ] );



        App\Models\ilceler::create( [
            'id'=>724,
            'il_id'=>54,
            'ilce_ad'=>'Kocaali'
        ] );



        App\Models\ilceler::create( [
            'id'=>725,
            'il_id'=>54,
            'ilce_ad'=>'Pamukova'
        ] );



        App\Models\ilceler::create( [
            'id'=>726,
            'il_id'=>54,
            'ilce_ad'=>'Sapanca'
        ] );



        App\Models\ilceler::create( [
            'id'=>727,
            'il_id'=>54,
            'ilce_ad'=>'Serdivan'
        ] );



        App\Models\ilceler::create( [
            'id'=>728,
            'il_id'=>54,
            'ilce_ad'=>'Söğütlü'
        ] );



        App\Models\ilceler::create( [
            'id'=>729,
            'il_id'=>54,
            'ilce_ad'=>'Taraklı'
        ] );



        App\Models\ilceler::create( [
            'id'=>730,
            'il_id'=>55,
            'ilce_ad'=>'19 Mayıs(Ballıca)'
        ] );



        App\Models\ilceler::create( [
            'id'=>731,
            'il_id'=>55,
            'ilce_ad'=>'Alaçam'
        ] );



        App\Models\ilceler::create( [
            'id'=>732,
            'il_id'=>55,
            'ilce_ad'=>'Asarcık'
        ] );



        App\Models\ilceler::create( [
            'id'=>733,
            'il_id'=>55,
            'ilce_ad'=>'ATAKUM'
        ] );



        App\Models\ilceler::create( [
            'id'=>734,
            'il_id'=>55,
            'ilce_ad'=>'Ayvacık'
        ] );



        App\Models\ilceler::create( [
            'id'=>735,
            'il_id'=>55,
            'ilce_ad'=>'Bafra'
        ] );



        App\Models\ilceler::create( [
            'id'=>736,
            'il_id'=>55,
            'ilce_ad'=>'Canik'
        ] );



        App\Models\ilceler::create( [
            'id'=>737,
            'il_id'=>55,
            'ilce_ad'=>'Çarşamba'
        ] );



        App\Models\ilceler::create( [
            'id'=>738,
            'il_id'=>55,
            'ilce_ad'=>'Havza'
        ] );



        App\Models\ilceler::create( [
            'id'=>739,
            'il_id'=>55,
            'ilce_ad'=>'İlkadım'
        ] );



        App\Models\ilceler::create( [
            'id'=>740,
            'il_id'=>55,
            'ilce_ad'=>'Kavak'
        ] );



        App\Models\ilceler::create( [
            'id'=>741,
            'il_id'=>55,
            'ilce_ad'=>'Ladik'
        ] );



        App\Models\ilceler::create( [
            'id'=>742,
            'il_id'=>55,
            'ilce_ad'=>'Salıpazarı'
        ] );



        App\Models\ilceler::create( [
            'id'=>743,
            'il_id'=>55,
            'ilce_ad'=>'Tekkeköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>744,
            'il_id'=>55,
            'ilce_ad'=>'Terme'
        ] );



        App\Models\ilceler::create( [
            'id'=>745,
            'il_id'=>55,
            'ilce_ad'=>'Vezirköprü'
        ] );



        App\Models\ilceler::create( [
            'id'=>746,
            'il_id'=>55,
            'ilce_ad'=>'Yakakent'
        ] );



        App\Models\ilceler::create( [
            'id'=>747,
            'il_id'=>56,
            'ilce_ad'=>'Aydınlar'
        ] );



        App\Models\ilceler::create( [
            'id'=>748,
            'il_id'=>56,
            'ilce_ad'=>'Baykan'
        ] );



        App\Models\ilceler::create( [
            'id'=>749,
            'il_id'=>56,
            'ilce_ad'=>'Eruh'
        ] );



        App\Models\ilceler::create( [
            'id'=>750,
            'il_id'=>56,
            'ilce_ad'=>'Kurtalan'
        ] );



        App\Models\ilceler::create( [
            'id'=>751,
            'il_id'=>56,
            'ilce_ad'=>'Pervari'
        ] );



        App\Models\ilceler::create( [
            'id'=>752,
            'il_id'=>56,
            'ilce_ad'=>'Siirt'
        ] );



        App\Models\ilceler::create( [
            'id'=>753,
            'il_id'=>56,
            'ilce_ad'=>'Şirvan'
        ] );



        App\Models\ilceler::create( [
            'id'=>754,
            'il_id'=>57,
            'ilce_ad'=>'Ayancık'
        ] );



        App\Models\ilceler::create( [
            'id'=>755,
            'il_id'=>57,
            'ilce_ad'=>'Boyabat'
        ] );



        App\Models\ilceler::create( [
            'id'=>756,
            'il_id'=>57,
            'ilce_ad'=>'Dikmen'
        ] );



        App\Models\ilceler::create( [
            'id'=>757,
            'il_id'=>57,
            'ilce_ad'=>'Durağan'
        ] );



        App\Models\ilceler::create( [
            'id'=>758,
            'il_id'=>57,
            'ilce_ad'=>'Erfelek'
        ] );



        App\Models\ilceler::create( [
            'id'=>759,
            'il_id'=>57,
            'ilce_ad'=>'Gerze'
        ] );



        App\Models\ilceler::create( [
            'id'=>760,
            'il_id'=>57,
            'ilce_ad'=>'Saraydüzü'
        ] );



        App\Models\ilceler::create( [
            'id'=>761,
            'il_id'=>57,
            'ilce_ad'=>'SİNOP'
        ] );



        App\Models\ilceler::create( [
            'id'=>762,
            'il_id'=>57,
            'ilce_ad'=>'Türkeli'
        ] );



        App\Models\ilceler::create( [
            'id'=>763,
            'il_id'=>58,
            'ilce_ad'=>'Akıncılar'
        ] );



        App\Models\ilceler::create( [
            'id'=>764,
            'il_id'=>58,
            'ilce_ad'=>'Altınyayla'
        ] );



        App\Models\ilceler::create( [
            'id'=>765,
            'il_id'=>58,
            'ilce_ad'=>'Divriği'
        ] );



        App\Models\ilceler::create( [
            'id'=>766,
            'il_id'=>58,
            'ilce_ad'=>'Doğanşar'
        ] );



        App\Models\ilceler::create( [
            'id'=>767,
            'il_id'=>58,
            'ilce_ad'=>'Gemerek'
        ] );



        App\Models\ilceler::create( [
            'id'=>768,
            'il_id'=>58,
            'ilce_ad'=>'Gölova'
        ] );



        App\Models\ilceler::create( [
            'id'=>769,
            'il_id'=>58,
            'ilce_ad'=>'Gürün'
        ] );



        App\Models\ilceler::create( [
            'id'=>770,
            'il_id'=>58,
            'ilce_ad'=>'Hafik'
        ] );



        App\Models\ilceler::create( [
            'id'=>771,
            'il_id'=>58,
            'ilce_ad'=>'İmranlı'
        ] );



        App\Models\ilceler::create( [
            'id'=>772,
            'il_id'=>58,
            'ilce_ad'=>'Kangal'
        ] );



        App\Models\ilceler::create( [
            'id'=>773,
            'il_id'=>58,
            'ilce_ad'=>'Koyulhisar'
        ] );



        App\Models\ilceler::create( [
            'id'=>774,
            'il_id'=>58,
            'ilce_ad'=>'Sivas'
        ] );



        App\Models\ilceler::create( [
            'id'=>775,
            'il_id'=>58,
            'ilce_ad'=>'Suşehri'
        ] );



        App\Models\ilceler::create( [
            'id'=>776,
            'il_id'=>58,
            'ilce_ad'=>'Şarkışla'
        ] );



        App\Models\ilceler::create( [
            'id'=>777,
            'il_id'=>58,
            'ilce_ad'=>'Ulaş'
        ] );



        App\Models\ilceler::create( [
            'id'=>778,
            'il_id'=>58,
            'ilce_ad'=>'Yıldızeli'
        ] );



        App\Models\ilceler::create( [
            'id'=>779,
            'il_id'=>58,
            'ilce_ad'=>'Zara'
        ] );



        App\Models\ilceler::create( [
            'id'=>780,
            'il_id'=>59,
            'ilce_ad'=>'Çerkezköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>781,
            'il_id'=>59,
            'ilce_ad'=>'Çorlu'
        ] );



        App\Models\ilceler::create( [
            'id'=>782,
            'il_id'=>59,
            'ilce_ad'=>'Hayrabolu'
        ] );



        App\Models\ilceler::create( [
            'id'=>783,
            'il_id'=>59,
            'ilce_ad'=>'Malkara'
        ] );



        App\Models\ilceler::create( [
            'id'=>784,
            'il_id'=>59,
            'ilce_ad'=>'Marmaraereğlisi'
        ] );



        App\Models\ilceler::create( [
            'id'=>785,
            'il_id'=>59,
            'ilce_ad'=>'Muratlı'
        ] );



        App\Models\ilceler::create( [
            'id'=>786,
            'il_id'=>59,
            'ilce_ad'=>'Saray'
        ] );



        App\Models\ilceler::create( [
            'id'=>787,
            'il_id'=>59,
            'ilce_ad'=>'Şarköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>788,
            'il_id'=>59,
            'ilce_ad'=>'Tekirdağ'
        ] );



        App\Models\ilceler::create( [
            'id'=>789,
            'il_id'=>60,
            'ilce_ad'=>'Almus'
        ] );



        App\Models\ilceler::create( [
            'id'=>790,
            'il_id'=>60,
            'ilce_ad'=>'Artova'
        ] );



        App\Models\ilceler::create( [
            'id'=>791,
            'il_id'=>60,
            'ilce_ad'=>'Başçiftlik'
        ] );



        App\Models\ilceler::create( [
            'id'=>792,
            'il_id'=>60,
            'ilce_ad'=>'ERBAA'
        ] );



        App\Models\ilceler::create( [
            'id'=>793,
            'il_id'=>60,
            'ilce_ad'=>'Niksar'
        ] );



        App\Models\ilceler::create( [
            'id'=>794,
            'il_id'=>60,
            'ilce_ad'=>'Pazar'
        ] );



        App\Models\ilceler::create( [
            'id'=>795,
            'il_id'=>60,
            'ilce_ad'=>'Reşadiye'
        ] );



        App\Models\ilceler::create( [
            'id'=>796,
            'il_id'=>60,
            'ilce_ad'=>'Sulusaray'
        ] );



        App\Models\ilceler::create( [
            'id'=>797,
            'il_id'=>60,
            'ilce_ad'=>'Tokat'
        ] );



        App\Models\ilceler::create( [
            'id'=>798,
            'il_id'=>60,
            'ilce_ad'=>'Turhal'
        ] );



        App\Models\ilceler::create( [
            'id'=>799,
            'il_id'=>60,
            'ilce_ad'=>'Yeşilyurt'
        ] );



        App\Models\ilceler::create( [
            'id'=>800,
            'il_id'=>60,
            'ilce_ad'=>'Zile'
        ] );



        App\Models\ilceler::create( [
            'id'=>801,
            'il_id'=>61,
            'ilce_ad'=>'Akçaabat'
        ] );



        App\Models\ilceler::create( [
            'id'=>802,
            'il_id'=>61,
            'ilce_ad'=>'Araklı'
        ] );



        App\Models\ilceler::create( [
            'id'=>803,
            'il_id'=>61,
            'ilce_ad'=>'Arsin'
        ] );



        App\Models\ilceler::create( [
            'id'=>804,
            'il_id'=>61,
            'ilce_ad'=>'Beşikdüzü'
        ] );



        App\Models\ilceler::create( [
            'id'=>805,
            'il_id'=>61,
            'ilce_ad'=>'Çarşıbaşı'
        ] );



        App\Models\ilceler::create( [
            'id'=>806,
            'il_id'=>61,
            'ilce_ad'=>'Çaykara'
        ] );



        App\Models\ilceler::create( [
            'id'=>807,
            'il_id'=>61,
            'ilce_ad'=>'Dernekpazarı'
        ] );



        App\Models\ilceler::create( [
            'id'=>808,
            'il_id'=>61,
            'ilce_ad'=>'Düzköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>809,
            'il_id'=>61,
            'ilce_ad'=>'Hayrat'
        ] );



        App\Models\ilceler::create( [
            'id'=>810,
            'il_id'=>61,
            'ilce_ad'=>'Köprübaşı'
        ] );



        App\Models\ilceler::create( [
            'id'=>811,
            'il_id'=>61,
            'ilce_ad'=>'Maçka'
        ] );



        App\Models\ilceler::create( [
            'id'=>812,
            'il_id'=>61,
            'ilce_ad'=>'Of'
        ] );



        App\Models\ilceler::create( [
            'id'=>813,
            'il_id'=>61,
            'ilce_ad'=>'Sürmene'
        ] );



        App\Models\ilceler::create( [
            'id'=>814,
            'il_id'=>61,
            'ilce_ad'=>'Şalpazarı'
        ] );



        App\Models\ilceler::create( [
            'id'=>815,
            'il_id'=>61,
            'ilce_ad'=>'Tonya'
        ] );



        App\Models\ilceler::create( [
            'id'=>816,
            'il_id'=>61,
            'ilce_ad'=>'Trabzon'
        ] );



        App\Models\ilceler::create( [
            'id'=>817,
            'il_id'=>61,
            'ilce_ad'=>'Vakfıkebir'
        ] );



        App\Models\ilceler::create( [
            'id'=>818,
            'il_id'=>61,
            'ilce_ad'=>'Yomra'
        ] );



        App\Models\ilceler::create( [
            'id'=>819,
            'il_id'=>62,
            'ilce_ad'=>'Çemişgezek'
        ] );



        App\Models\ilceler::create( [
            'id'=>820,
            'il_id'=>62,
            'ilce_ad'=>'Hozat'
        ] );



        App\Models\ilceler::create( [
            'id'=>821,
            'il_id'=>62,
            'ilce_ad'=>'Mazgirt'
        ] );



        App\Models\ilceler::create( [
            'id'=>822,
            'il_id'=>62,
            'ilce_ad'=>'Nazımiye'
        ] );



        App\Models\ilceler::create( [
            'id'=>823,
            'il_id'=>62,
            'ilce_ad'=>'Ovacık'
        ] );



        App\Models\ilceler::create( [
            'id'=>824,
            'il_id'=>62,
            'ilce_ad'=>'Pertek'
        ] );



        App\Models\ilceler::create( [
            'id'=>825,
            'il_id'=>62,
            'ilce_ad'=>'Pülümür'
        ] );



        App\Models\ilceler::create( [
            'id'=>826,
            'il_id'=>62,
            'ilce_ad'=>'Tunceli'
        ] );



        App\Models\ilceler::create( [
            'id'=>827,
            'il_id'=>63,
            'ilce_ad'=>'Akçakale'
        ] );



        App\Models\ilceler::create( [
            'id'=>828,
            'il_id'=>63,
            'ilce_ad'=>'Birecik'
        ] );



        App\Models\ilceler::create( [
            'id'=>829,
            'il_id'=>63,
            'ilce_ad'=>'Bozova'
        ] );



        App\Models\ilceler::create( [
            'id'=>830,
            'il_id'=>63,
            'ilce_ad'=>'Ceylanpınar'
        ] );



        App\Models\ilceler::create( [
            'id'=>831,
            'il_id'=>63,
            'ilce_ad'=>'Halfeti'
        ] );



        App\Models\ilceler::create( [
            'id'=>832,
            'il_id'=>63,
            'ilce_ad'=>'Harran'
        ] );



        App\Models\ilceler::create( [
            'id'=>833,
            'il_id'=>63,
            'ilce_ad'=>'Hilvan'
        ] );



        App\Models\ilceler::create( [
            'id'=>834,
            'il_id'=>63,
            'ilce_ad'=>'SİVEREK'
        ] );



        App\Models\ilceler::create( [
            'id'=>835,
            'il_id'=>63,
            'ilce_ad'=>'Suruç'
        ] );



        App\Models\ilceler::create( [
            'id'=>836,
            'il_id'=>63,
            'ilce_ad'=>'Şanlıurfa'
        ] );



        App\Models\ilceler::create( [
            'id'=>837,
            'il_id'=>63,
            'ilce_ad'=>'Viranşehir'
        ] );



        App\Models\ilceler::create( [
            'id'=>838,
            'il_id'=>64,
            'ilce_ad'=>'Banaz'
        ] );



        App\Models\ilceler::create( [
            'id'=>839,
            'il_id'=>64,
            'ilce_ad'=>'Eşme'
        ] );



        App\Models\ilceler::create( [
            'id'=>840,
            'il_id'=>64,
            'ilce_ad'=>'Karahallı'
        ] );



        App\Models\ilceler::create( [
            'id'=>841,
            'il_id'=>64,
            'ilce_ad'=>'Sivaslı'
        ] );



        App\Models\ilceler::create( [
            'id'=>842,
            'il_id'=>64,
            'ilce_ad'=>'Ulubey'
        ] );



        App\Models\ilceler::create( [
            'id'=>843,
            'il_id'=>64,
            'ilce_ad'=>'Uşak'
        ] );



        App\Models\ilceler::create( [
            'id'=>844,
            'il_id'=>65,
            'ilce_ad'=>'Bahçesaray'
        ] );



        App\Models\ilceler::create( [
            'id'=>845,
            'il_id'=>65,
            'ilce_ad'=>'Başkale'
        ] );



        App\Models\ilceler::create( [
            'id'=>846,
            'il_id'=>65,
            'ilce_ad'=>'Çaldıran'
        ] );



        App\Models\ilceler::create( [
            'id'=>847,
            'il_id'=>65,
            'ilce_ad'=>'Çatak'
        ] );



        App\Models\ilceler::create( [
            'id'=>848,
            'il_id'=>65,
            'ilce_ad'=>'Edremit(Gümüşdere)'
        ] );



        App\Models\ilceler::create( [
            'id'=>849,
            'il_id'=>65,
            'ilce_ad'=>'Erciş'
        ] );



        App\Models\ilceler::create( [
            'id'=>850,
            'il_id'=>65,
            'ilce_ad'=>'Gevaş'
        ] );



        App\Models\ilceler::create( [
            'id'=>851,
            'il_id'=>65,
            'ilce_ad'=>'Gürpınar'
        ] );



        App\Models\ilceler::create( [
            'id'=>852,
            'il_id'=>65,
            'ilce_ad'=>'Muradiye'
        ] );



        App\Models\ilceler::create( [
            'id'=>853,
            'il_id'=>65,
            'ilce_ad'=>'Özalp'
        ] );



        App\Models\ilceler::create( [
            'id'=>854,
            'il_id'=>65,
            'ilce_ad'=>'Saray'
        ] );



        App\Models\ilceler::create( [
            'id'=>855,
            'il_id'=>65,
            'ilce_ad'=>'Van'
        ] );



        App\Models\ilceler::create( [
            'id'=>856,
            'il_id'=>66,
            'ilce_ad'=>'Akdağmadeni'
        ] );



        App\Models\ilceler::create( [
            'id'=>857,
            'il_id'=>66,
            'ilce_ad'=>'Aydıncık'
        ] );



        App\Models\ilceler::create( [
            'id'=>858,
            'il_id'=>66,
            'ilce_ad'=>'Boğazlıyan'
        ] );



        App\Models\ilceler::create( [
            'id'=>859,
            'il_id'=>66,
            'ilce_ad'=>'Çandır'
        ] );



        App\Models\ilceler::create( [
            'id'=>860,
            'il_id'=>66,
            'ilce_ad'=>'Çayıralan'
        ] );



        App\Models\ilceler::create( [
            'id'=>861,
            'il_id'=>66,
            'ilce_ad'=>'Çekerek'
        ] );



        App\Models\ilceler::create( [
            'id'=>862,
            'il_id'=>66,
            'ilce_ad'=>'Kadışehri'
        ] );



        App\Models\ilceler::create( [
            'id'=>863,
            'il_id'=>66,
            'ilce_ad'=>'Saraykent'
        ] );



        App\Models\ilceler::create( [
            'id'=>864,
            'il_id'=>66,
            'ilce_ad'=>'Sarıkaya'
        ] );



        App\Models\ilceler::create( [
            'id'=>865,
            'il_id'=>66,
            'ilce_ad'=>'Sorgun'
        ] );



        App\Models\ilceler::create( [
            'id'=>866,
            'il_id'=>66,
            'ilce_ad'=>'Şefaatli'
        ] );



        App\Models\ilceler::create( [
            'id'=>867,
            'il_id'=>66,
            'ilce_ad'=>'Yenifakılı'
        ] );



        App\Models\ilceler::create( [
            'id'=>868,
            'il_id'=>66,
            'ilce_ad'=>'Yerköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>869,
            'il_id'=>66,
            'ilce_ad'=>'Yozgat'
        ] );



        App\Models\ilceler::create( [
            'id'=>870,
            'il_id'=>67,
            'ilce_ad'=>'ALAPLI'
        ] );



        App\Models\ilceler::create( [
            'id'=>871,
            'il_id'=>67,
            'ilce_ad'=>'Çaycuma'
        ] );



        App\Models\ilceler::create( [
            'id'=>872,
            'il_id'=>67,
            'ilce_ad'=>'Devrek'
        ] );



        App\Models\ilceler::create( [
            'id'=>873,
            'il_id'=>67,
            'ilce_ad'=>'Gökçebey'
        ] );



        App\Models\ilceler::create( [
            'id'=>874,
            'il_id'=>67,
            'ilce_ad'=>'KARADENİZEREĞLİ'
        ] );



        App\Models\ilceler::create( [
            'id'=>875,
            'il_id'=>67,
            'ilce_ad'=>'Zonguldak'
        ] );



        App\Models\ilceler::create( [
            'id'=>876,
            'il_id'=>68,
            'ilce_ad'=>'Ağaçören'
        ] );



        App\Models\ilceler::create( [
            'id'=>877,
            'il_id'=>68,
            'ilce_ad'=>'Aksaray'
        ] );



        App\Models\ilceler::create( [
            'id'=>878,
            'il_id'=>68,
            'ilce_ad'=>'Eskil'
        ] );



        App\Models\ilceler::create( [
            'id'=>879,
            'il_id'=>68,
            'ilce_ad'=>'Gülağaç(Ağaçlı)'
        ] );



        App\Models\ilceler::create( [
            'id'=>880,
            'il_id'=>68,
            'ilce_ad'=>'Güzelyurt'
        ] );



        App\Models\ilceler::create( [
            'id'=>881,
            'il_id'=>68,
            'ilce_ad'=>'Ortaköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>882,
            'il_id'=>68,
            'ilce_ad'=>'Sarıyahşi'
        ] );



        App\Models\ilceler::create( [
            'id'=>883,
            'il_id'=>69,
            'ilce_ad'=>'Aydıntepe'
        ] );



        App\Models\ilceler::create( [
            'id'=>884,
            'il_id'=>69,
            'ilce_ad'=>'Bayburt'
        ] );



        App\Models\ilceler::create( [
            'id'=>885,
            'il_id'=>69,
            'ilce_ad'=>'Demirözü'
        ] );



        App\Models\ilceler::create( [
            'id'=>886,
            'il_id'=>70,
            'ilce_ad'=>'Ayrancı'
        ] );



        App\Models\ilceler::create( [
            'id'=>887,
            'il_id'=>70,
            'ilce_ad'=>'Başyayla'
        ] );



        App\Models\ilceler::create( [
            'id'=>888,
            'il_id'=>70,
            'ilce_ad'=>'Ermenek'
        ] );



        App\Models\ilceler::create( [
            'id'=>889,
            'il_id'=>70,
            'ilce_ad'=>'Karaman'
        ] );



        App\Models\ilceler::create( [
            'id'=>890,
            'il_id'=>70,
            'ilce_ad'=>'Kazımkarabekir'
        ] );



        App\Models\ilceler::create( [
            'id'=>891,
            'il_id'=>70,
            'ilce_ad'=>'Sarıveliler'
        ] );



        App\Models\ilceler::create( [
            'id'=>892,
            'il_id'=>71,
            'ilce_ad'=>'Bahşili'
        ] );



        App\Models\ilceler::create( [
            'id'=>893,
            'il_id'=>71,
            'ilce_ad'=>'Balışeyh'
        ] );



        App\Models\ilceler::create( [
            'id'=>894,
            'il_id'=>71,
            'ilce_ad'=>'Çelebi'
        ] );



        App\Models\ilceler::create( [
            'id'=>895,
            'il_id'=>71,
            'ilce_ad'=>'Delice'
        ] );



        App\Models\ilceler::create( [
            'id'=>896,
            'il_id'=>71,
            'ilce_ad'=>'Karakeçili'
        ] );



        App\Models\ilceler::create( [
            'id'=>897,
            'il_id'=>71,
            'ilce_ad'=>'Keskin'
        ] );



        App\Models\ilceler::create( [
            'id'=>898,
            'il_id'=>71,
            'ilce_ad'=>'Kırıkkale'
        ] );



        App\Models\ilceler::create( [
            'id'=>899,
            'il_id'=>71,
            'ilce_ad'=>'Sulakyurt'
        ] );



        App\Models\ilceler::create( [
            'id'=>900,
            'il_id'=>71,
            'ilce_ad'=>'Yahşihan'
        ] );



        App\Models\ilceler::create( [
            'id'=>901,
            'il_id'=>72,
            'ilce_ad'=>'Batman'
        ] );



        App\Models\ilceler::create( [
            'id'=>902,
            'il_id'=>72,
            'ilce_ad'=>'Beşiri'
        ] );



        App\Models\ilceler::create( [
            'id'=>903,
            'il_id'=>72,
            'ilce_ad'=>'Gercüş'
        ] );



        App\Models\ilceler::create( [
            'id'=>904,
            'il_id'=>72,
            'ilce_ad'=>'Hasankeyf'
        ] );



        App\Models\ilceler::create( [
            'id'=>905,
            'il_id'=>72,
            'ilce_ad'=>'Kozluk'
        ] );



        App\Models\ilceler::create( [
            'id'=>906,
            'il_id'=>72,
            'ilce_ad'=>'Sason'
        ] );



        App\Models\ilceler::create( [
            'id'=>907,
            'il_id'=>73,
            'ilce_ad'=>'Beytüşşebap'
        ] );



        App\Models\ilceler::create( [
            'id'=>908,
            'il_id'=>73,
            'ilce_ad'=>'Cizre'
        ] );



        App\Models\ilceler::create( [
            'id'=>909,
            'il_id'=>73,
            'ilce_ad'=>'Güçlükonak'
        ] );



        App\Models\ilceler::create( [
            'id'=>910,
            'il_id'=>73,
            'ilce_ad'=>'İdil'
        ] );



        App\Models\ilceler::create( [
            'id'=>911,
            'il_id'=>73,
            'ilce_ad'=>'Silopi'
        ] );



        App\Models\ilceler::create( [
            'id'=>912,
            'il_id'=>73,
            'ilce_ad'=>'Şırnak'
        ] );



        App\Models\ilceler::create( [
            'id'=>913,
            'il_id'=>73,
            'ilce_ad'=>'Uludere'
        ] );



        App\Models\ilceler::create( [
            'id'=>914,
            'il_id'=>74,
            'ilce_ad'=>'Amasra'
        ] );



        App\Models\ilceler::create( [
            'id'=>915,
            'il_id'=>74,
            'ilce_ad'=>'Bartın'
        ] );



        App\Models\ilceler::create( [
            'id'=>916,
            'il_id'=>74,
            'ilce_ad'=>'Kurucaşile'
        ] );



        App\Models\ilceler::create( [
            'id'=>917,
            'il_id'=>74,
            'ilce_ad'=>'Ulus'
        ] );



        App\Models\ilceler::create( [
            'id'=>918,
            'il_id'=>75,
            'ilce_ad'=>'Ardahan'
        ] );



        App\Models\ilceler::create( [
            'id'=>919,
            'il_id'=>75,
            'ilce_ad'=>'Çıldır'
        ] );



        App\Models\ilceler::create( [
            'id'=>920,
            'il_id'=>75,
            'ilce_ad'=>'Damal'
        ] );



        App\Models\ilceler::create( [
            'id'=>921,
            'il_id'=>75,
            'ilce_ad'=>'Göle'
        ] );



        App\Models\ilceler::create( [
            'id'=>922,
            'il_id'=>75,
            'ilce_ad'=>'Hanak'
        ] );



        App\Models\ilceler::create( [
            'id'=>923,
            'il_id'=>75,
            'ilce_ad'=>'Posof'
        ] );



        App\Models\ilceler::create( [
            'id'=>924,
            'il_id'=>76,
            'ilce_ad'=>'Aralık'
        ] );



        App\Models\ilceler::create( [
            'id'=>925,
            'il_id'=>76,
            'ilce_ad'=>'Iğdır'
        ] );



        App\Models\ilceler::create( [
            'id'=>926,
            'il_id'=>76,
            'ilce_ad'=>'Karakoyunlu'
        ] );



        App\Models\ilceler::create( [
            'id'=>927,
            'il_id'=>76,
            'ilce_ad'=>'Tuzluca'
        ] );



        App\Models\ilceler::create( [
            'id'=>928,
            'il_id'=>77,
            'ilce_ad'=>'Altınova'
        ] );



        App\Models\ilceler::create( [
            'id'=>929,
            'il_id'=>77,
            'ilce_ad'=>'Armutlu'
        ] );



        App\Models\ilceler::create( [
            'id'=>930,
            'il_id'=>77,
            'ilce_ad'=>'Çınarcık'
        ] );



        App\Models\ilceler::create( [
            'id'=>931,
            'il_id'=>77,
            'ilce_ad'=>'Çiftlikköy'
        ] );



        App\Models\ilceler::create( [
            'id'=>932,
            'il_id'=>77,
            'ilce_ad'=>'Termal'
        ] );



        App\Models\ilceler::create( [
            'id'=>933,
            'il_id'=>77,
            'ilce_ad'=>'Yalova'
        ] );



        App\Models\ilceler::create( [
            'id'=>934,
            'il_id'=>78,
            'ilce_ad'=>'Eflani'
        ] );



        App\Models\ilceler::create( [
            'id'=>935,
            'il_id'=>78,
            'ilce_ad'=>'Eskipazar'
        ] );



        App\Models\ilceler::create( [
            'id'=>936,
            'il_id'=>78,
            'ilce_ad'=>'Karabük'
        ] );



        App\Models\ilceler::create( [
            'id'=>937,
            'il_id'=>78,
            'ilce_ad'=>'Ovacık'
        ] );



        App\Models\ilceler::create( [
            'id'=>938,
            'il_id'=>78,
            'ilce_ad'=>'Safranbolu'
        ] );



        App\Models\ilceler::create( [
            'id'=>939,
            'il_id'=>78,
            'ilce_ad'=>'Yenice'
        ] );



        App\Models\ilceler::create( [
            'id'=>940,
            'il_id'=>79,
            'ilce_ad'=>'Elbeyli'
        ] );



        App\Models\ilceler::create( [
            'id'=>941,
            'il_id'=>79,
            'ilce_ad'=>'Kilis'
        ] );



        App\Models\ilceler::create( [
            'id'=>942,
            'il_id'=>79,
            'ilce_ad'=>'Musabeyli'
        ] );



        App\Models\ilceler::create( [
            'id'=>943,
            'il_id'=>79,
            'ilce_ad'=>'Polateli'
        ] );



        App\Models\ilceler::create( [
            'id'=>944,
            'il_id'=>80,
            'ilce_ad'=>'Bahçe'
        ] );



        App\Models\ilceler::create( [
            'id'=>945,
            'il_id'=>80,
            'ilce_ad'=>'Düziçi'
        ] );



        App\Models\ilceler::create( [
            'id'=>946,
            'il_id'=>80,
            'ilce_ad'=>'Hasanbeyli'
        ] );



        App\Models\ilceler::create( [
            'id'=>947,
            'il_id'=>80,
            'ilce_ad'=>'Kadirli'
        ] );



        App\Models\ilceler::create( [
            'id'=>948,
            'il_id'=>80,
            'ilce_ad'=>'Osmaniye'
        ] );



        App\Models\ilceler::create( [
            'id'=>949,
            'il_id'=>80,
            'ilce_ad'=>'Sumbas'
        ] );



        App\Models\ilceler::create( [
            'id'=>950,
            'il_id'=>80,
            'ilce_ad'=>'Toprakkale'
        ] );



        App\Models\ilceler::create( [
            'id'=>951,
            'il_id'=>81,
            'ilce_ad'=>'AKÇAKOCA'
        ] );



        App\Models\ilceler::create( [
            'id'=>952,
            'il_id'=>81,
            'ilce_ad'=>'Cumayeri'
        ] );



        App\Models\ilceler::create( [
            'id'=>953,
            'il_id'=>81,
            'ilce_ad'=>'Çilimli'
        ] );



        App\Models\ilceler::create( [
            'id'=>954,
            'il_id'=>81,
            'ilce_ad'=>'DÜZCE'
        ] );



        App\Models\ilceler::create( [
            'id'=>955,
            'il_id'=>81,
            'ilce_ad'=>'Gölyaka'
        ] );



        App\Models\ilceler::create( [
            'id'=>956,
            'il_id'=>81,
            'ilce_ad'=>'Gümüşova'
        ] );



        App\Models\ilceler::create( [
            'id'=>957,
            'il_id'=>81,
            'ilce_ad'=>'Kaynaşlı'
        ] );



        App\Models\ilceler::create( [
            'id'=>958,
            'il_id'=>81,
            'ilce_ad'=>'Yığılca'
        ] );



        App\Models\ilceler::create( [
            'id'=>959,
            'il_id'=>34,
            'ilce_ad'=>'Beşiktaş'
        ] );



        App\Models\ilceler::create( [
            'id'=>960,
            'il_id'=>10,
            'ilce_ad'=>'KARESİ'
        ] );



        App\Models\ilceler::create( [
            'id'=>961,
            'il_id'=>10,
            'ilce_ad'=>'6 EYLÜL'
        ] );



        App\Models\ilceler::create( [
            'id'=>962,
            'il_id'=>61,
            'ilce_ad'=>'ORTAHİSAR'
        ] );
    }
}
