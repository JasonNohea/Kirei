<?php
use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesSeeder extends Seeder
{
    public function run()
    {
        $cities = [
            ['city_name' => 'KABUPATEN SIMEULUE'],
            ['city_name' => 'KABUPATEN ACEH SINGKIL'],
            ['city_name' => 'KABUPATEN ACEH SELATAN'],
            ['city_name' => 'KABUPATEN ACEH TENGGARA'],
            ['city_name' => 'KABUPATEN ACEH TIMUR'],
            ['city_name' => 'KABUPATEN ACEH TENGAH'],
            ['city_name' => 'KABUPATEN ACEH BARAT'],
            ['city_name' => 'KABUPATEN ACEH BESAR'],
            ['city_name' => 'KABUPATEN PIDIE'],
            ['city_name' => 'KABUPATEN BIREUEN'],
            ['city_name' => 'KABUPATEN ACEH UTARA'],
            ['city_name' => 'KABUPATEN ACEH BARAT DAYA'],
            ['city_name' => 'KABUPATEN GAYO LUES'],
            ['city_name' => 'KABUPATEN ACEH TAMIANG'],
            ['city_name' => 'KABUPATEN NAGAN RAYA'],
            ['city_name' => 'KABUPATEN ACEH JAYA'],
            ['city_name' => 'KABUPATEN BENER MERIAH'],
            ['city_name' => 'KABUPATEN PIDIE JAYA'],
            ['city_name' => 'KOTA BANDA ACEH'],
            ['city_name' => 'KOTA SABANG'],
            ['city_name' => 'KOTA LANGSA'],
            ['city_name' => 'KOTA LHOKSEUMAWE'],
            ['city_name' => 'KOTA SUBULUSSALAM'],
            ['city_name' => 'KABUPATEN NIAS'],
            ['city_name' => 'KABUPATEN MANDAILING NATAL'],
            ['city_name' => 'KABUPATEN TAPANULI SELATAN'],
            ['city_name' => 'KABUPATEN TAPANULI TENGAH'],
            ['city_name' => 'KABUPATEN TAPANULI UTARA'],
            ['city_name' => 'KABUPATEN TOBA SAMOSIR'],
            ['city_name' => 'KABUPATEN LABUHAN BATU'],
            ['city_name' => 'KABUPATEN ASAHAN'],
            ['city_name' => 'KABUPATEN SIMALUNGUN'],
            ['city_name' => 'KABUPATEN DAIRI'],
            ['city_name' => 'KABUPATEN KARO'],
            ['city_name' => 'KABUPATEN DELI SERDANG'],
            ['city_name' => 'KABUPATEN LANGKAT'],
            ['city_name' => 'KABUPATEN NIAS SELATAN'],
            ['city_name' => 'KABUPATEN HUMBANG HASUNDUTAN'],
            ['city_name' => 'KABUPATEN PAKPAK BHARAT'],
            ['city_name' => 'KABUPATEN SAMOSIR'],
            ['city_name' => 'KABUPATEN SERDANG BEDAGAI'],
            ['city_name' => 'KABUPATEN BATU BARA'],
            ['city_name' => 'KABUPATEN PADANG LAWAS UTARA'],
            ['city_name' => 'KABUPATEN PADANG LAWAS'],
            ['city_name' => 'KABUPATEN LABUHAN BATU SELATAN'],
            ['city_name' => 'KABUPATEN LABUHAN BATU UTARA'],
            ['city_name' => 'KABUPATEN NIAS UTARA'],
            ['city_name' => 'KABUPATEN NIAS BARAT'],
            ['city_name' => 'KOTA SIBOLGA'],
            ['city_name' => 'KOTA TANJUNG BALAI'],
            ['city_name' => 'KOTA PEMATANG SIANTAR'],
            ['city_name' => 'KOTA TEBING TINGGI'],
            ['city_name' => 'KOTA MEDAN'],
            ['city_name' => 'KOTA BINJAI'],
            ['city_name' => 'KOTA PADANGSIDIMPUAN'],
            ['city_name' => 'KOTA GUNUNGSITOLI'],
            ['city_name' => 'KABUPATEN KEPULAUAN MENTAWAI'],
            ['city_name' => 'KABUPATEN PESISIR SELATAN'],
            ['city_name' => 'KABUPATEN SOLOK'],
            ['city_name' => 'KABUPATEN SIJUNJUNG'],
            ['city_name' => 'KABUPATEN TANAH DATAR'],
            ['city_name' => 'KABUPATEN PADANG PARIAMAN'],
            ['city_name' => 'KABUPATEN AGAM'],
            ['city_name' => 'KABUPATEN LIMA PULUH KOTA'],
            ['city_name' => 'KABUPATEN PASAMAN'],
            ['city_name' => 'KABUPATEN SOLOK SELATAN'],
            ['city_name' => 'KABUPATEN DHARMASRAYA'],
            ['city_name' => 'KABUPATEN PASAMAN BARAT'],
            ['city_name' => 'KOTA PADANG'],
            ['city_name' => 'KOTA SOLOK'],
            ['city_name' => 'KOTA SAWAH LUNTO'],
            ['city_name' => 'KOTA PADANG PANJANG'],
            ['city_name' => 'KOTA BUKITTINGGI'],
            ['city_name' => 'KOTA PAYAKUMBUH'],
            ['city_name' => 'KOTA PARIAMAN'],
            ['city_name' => 'KOTA BUKITTINGGI'],
            ['city_name' => 'KABUPATEN KAMPAR'],
            ['city_name' => 'KABUPATEN INDRAGIRI HULU'],
            ['city_name' => 'KABUPATEN BENGKALIS'],
            ['city_name' => 'KABUPATEN INDRAGIRI HILIR'],
            ['city_name' => 'KABUPATEN PELALAWAN'],
            ['city_name' => 'KABUPATEN ROKAN HULU'],
            ['city_name' => 'KABUPATEN ROKAN HILIR'],
            ['city_name' => 'KABUPATEN SIAK'],
            ['city_name' => 'KABUPATEN KUANTAN SINGINGI'],
            ['city_name' => 'KABUPATEN KEPULAUAN MERANTI'],
            ['city_name' => 'KOTA PEKANBARU'],
            ['city_name' => 'KOTA DUMAI'],
            ['city_name' => 'KABUPATEN KERINCI'],
            ['city_name' => 'KABUPATEN MERANGIN'],
            ['city_name' => 'KABUPATEN SAROLANGUN'],
            ['city_name' => 'KABUPATEN BATANG HARI'],
            ['city_name' => 'KABUPATEN MUARO JAMBI'],
            ['city_name' => 'KABUPATEN TANJUNG JABUNG TIMUR'],
            ['city_name' => 'KABUPATEN TANJUNG JABUNG BARAT'],
            ['city_name' => 'KABUPATEN TEBO'],
            ['city_name' => 'KABUPATEN BUNGO'],
            ['city_name' => 'KOTA JAMBI'],
            ['city_name' => 'KOTA SUNGAI PENUH'],
            ['city_name' => 'KABUPATEN OGAN KOMERING ULU'],
            ['city_name' => 'KABUPATEN OGAN KOMERING ILIR'],
            ['city_name' => 'KABUPATEN MUARA ENIM'],
            ['city_name' => 'KABUPATEN LAHAT'],
            ['city_name' => 'KABUPATEN MUSI RAWAS'],
            ['city_name' => 'KABUPATEN MUSI BANYUASIN'],
            ['city_name' => 'KABUPATEN BANYU ASIN'],
            ['city_name' => 'KABUPATEN OGAN KOMERING ULU SELATAN'],
            ['city_name' => 'KABUPATEN OGAN KOMERING ULU TIMUR'],
            ['city_name' => 'KABUPATEN OGAN ILIR'],
            ['city_name' => 'KABUPATEN EMPAT LAWANG'],
            ['city_name' => 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'],
            ['city_name' => 'KABUPATEN MUSI RAWAS UTARA'],
            ['city_name' => 'KOTA PALEMBANG'],
            ['city_name' => 'KOTA PRABUMULIH'],
            ['city_name' => 'KOTA PAGAR ALAM'],
            ['city_name' => 'KOTA LUBUKLINGGAU'],
            ['city_name' => 'KABUPATEN BENGKULU SELATAN'],
            ['city_name' => 'KABUPATEN REJANG LEBONG'],
            ['city_name' => 'KABUPATEN BENGKULU UTARA'],
            ['city_name' => 'KABUPATEN KAUR'],
            ['city_name' => 'KABUPATEN SELUMA'],
            ['city_name' => 'KABUPATEN MUKO MUKO'],
            ['city_name' => 'KABUPATEN LEBONG'],
            ['city_name' => 'KABUPATEN KEPAHIANG'],
            ['city_name' => 'KABUPATEN BENGKULU TENGAH'],
            ['city_name' => 'KOTA BENGKULU'],
            ['city_name' => 'KABUPATEN LAMPUNG BARAT'],
            ['city_name' => 'KABUPATEN TANGGAMUS'],
            ['city_name' => 'KABUPATEN LAMPUNG SELATAN'],
            ['city_name' => 'KABUPATEN LAMPUNG TIMUR'],
            ['city_name' => 'KABUPATEN LAMPUNG TENGAH'],
            ['city_name' => 'KABUPATEN LAMPUNG UTARA'],
            ['city_name' => 'KABUPATEN WAY KANAN'],
            ['city_name' => 'KABUPATEN TULANGBAWANG'],
            ['city_name' => 'KABUPATEN PESAWARAN'],
            ['city_name' => 'KABUPATEN PRINGSEWU'],
            ['city_name' => 'KABUPATEN MESUJI'],
            ['city_name' => 'KABUPATEN TULANG BAWANG BARAT'],
            ['city_name' => 'KABUPATEN PESISIR BARAT'],
            ['city_name' => 'KOTA BANDAR LAMPUNG'],
            ['city_name' => 'KOTA METRO'],
            ['city_name' => 'KABUPATEN BANGKA'],
            ['city_name' => 'KABUPATEN BELITUNG'],
            ['city_name' => 'KABUPATEN BANGKA BARAT'],
            ['city_name' => 'KABUPATEN BANGKA TENGAH'],
            ['city_name' => 'KABUPATEN BANGKA SELATAN'],
            ['city_name' => 'KABUPATEN BELITUNG TIMUR'],
            ['city_name' => 'KOTA PANGKAL PINANG'],
            ['city_name' => 'KABUPATEN KARIMUN'],
            ['city_name' => 'KABUPATEN BINTAN'],
            ['city_name' => 'KABUPATEN NATUNA'],
            ['city_name' => 'KABUPATEN LINGGA'],
            ['city_name' => 'KABUPATEN KEPULAUAN ANAMBAS'],
            ['city_name' => 'KOTA BATAM'],
            ['city_name' => 'KOTA TANJUNG PINANG'],
            ['city_name' => 'KABUPATEN BANYUWANGI'],
            ['city_name' => 'KABUPATEN JEMBER'],
            ['city_name' => 'KABUPATEN LUMAJANG'],
            ['city_name' => 'KABUPATEN MALANG'],
            ['city_name' => 'KABUPATEN BONDOWOSO'],
            ['city_name' => 'KABUPATEN SITUBONDO'],
            ['city_name' => 'KABUPATEN PROBOLINGGO'],
            ['city_name' => 'KABUPATEN PASURUAN'],
            ['city_name' => 'KABUPATEN SIDOARJO'],
            ['city_name' => 'KABUPATEN MOJOKERTO'],
            ['city_name' => 'KABUPATEN JOMBANG'],
            ['city_name' => 'KABUPATEN NGANJUK'],
            ['city_name' => 'KABUPATEN MADIUN'],
            ['city_name' => 'KABUPATEN MAGETAN'],
            ['city_name' => 'KABUPATEN NGAWI'],
            ['city_name' => 'KABUPATEN BOJONEGORO'],
            ['city_name' => 'KABUPATEN TUBAN'],
            ['city_name' => 'KABUPATEN LAMONGAN'],
            ['city_name' => 'KABUPATEN GRESIK'],
            ['city_name' => 'KABUPATEN BANGKALAN'],
            ['city_name' => 'KABUPATEN SAMPANG'],
            ['city_name' => 'KABUPATEN PAMEKASAN'],
            ['city_name' => 'KABUPATEN SUMENEP'],
            ['city_name' => 'KOTA KEDIRI'],
            ['city_name' => 'KOTA BLITAR'],
            ['city_name' => 'KOTA MALANG'],
            ['city_name' => 'KOTA PROBOLINGGO'],
            ['city_name' => 'KOTA PASURUAN'],
            ['city_name' => 'KOTA MOJOKERTO'],
            ['city_name' => 'KOTA MADIUN'],
            ['city_name' => 'KOTA SURABAYA'],
            ['city_name' => 'KOTA BATU'],
            ['city_name' => 'KABUPATEN PANDEGLANG'],
            ['city_name' => 'KABUPATEN LEBAK'],
            ['city_name' => 'KABUPATEN TANGERANG'],
            ['city_name' => 'KABUPATEN SERANG'],
            ['city_name' => 'KOTA TANGERANG'],
            ['city_name' => 'KOTA CILEGON'],
            ['city_name' => 'KOTA SERANG'],
            ['city_name' => 'KOTA TANGERANG SELATAN'],
            ['city_name' => 'KABUPATEN JEMBRANA'],
            ['city_name' => 'KABUPATEN TABANAN'],
            ['city_name' => 'KABUPATEN BADUNG'],
            ['city_name' => 'KABUPATEN GIANYAR'],
            ['city_name' => 'KABUPATEN KLUNGKUNG'],
            ['city_name' => 'KABUPATEN BANGLI'],
            ['city_name' => 'KABUPATEN KARANG ASEM'],
            ['city_name' => 'KABUPATEN BULELENG'],
            ['city_name' => 'KOTA DENPASAR'],
            ['city_name' => 'KABUPATEN LOMBOK BARAT'],
            ['city_name' => 'KABUPATEN LOMBOK TENGAH'],
            ['city_name' => 'KABUPATEN LOMBOK TIMUR'],
            ['city_name' => 'KABUPATEN SUMBAWA'],
            ['city_name' => 'KABUPATEN DOMPU'],
            ['city_name' => 'KABUPATEN BIMA'],
            ['city_name' => 'KABUPATEN SUMBAWA BARAT'],
            ['city_name' => 'KABUPATEN LOMBOK UTARA'],
            ['city_name' => 'KOTA MATARAM'],
            ['city_name' => 'KOTA BIMA'],
            ['city_name' => 'KABUPATEN SUMBA BARAT'],
            ['city_name' => 'KABUPATEN SUMBA TIMUR'],
            ['city_name' => 'KABUPATEN KUPANG'],
            ['city_name' => 'KABUPATEN TIMOR TENGAH SELATAN'],
            ['city_name' => 'KABUPATEN TIMOR TENGAH UTARA'],
            ['city_name' => 'KABUPATEN BELU'],
            ['city_name' => 'KABUPATEN ALOR'],
            ['city_name' => 'KABUPATEN LEMBATA'],
            ['city_name' => 'KABUPATEN FLORES TIMUR'],
            ['city_name' => 'KABUPATEN SIKKA'],
            ['city_name' => 'KABUPATEN ENDE'],
            ['city_name' => 'KABUPATEN NGADA'],
            ['city_name' => 'KABUPATEN MANGGARAI'],
            ['city_name' => 'KABUPATEN ROTE NDAO'],
            ['city_name' => 'KABUPATEN MANGGARAI BARAT'],
            ['city_name' => 'KABUPATEN SUMBA TENGAH'],
            ['city_name' => 'KABUPATEN SUMBA BARAT DAYA'],
            ['city_name' => 'KABUPATEN NAGEKEO'],
            ['city_name' => 'KABUPATEN MANGGARAI TIMUR'],
            ['city_name' => 'KABUPATEN SABU RAIJUA'],
            ['city_name' => 'KABUPATEN MALAKA'],
            ['city_name' => 'KOTA KUPANG'],
        ];

        City::insert($cities);
    }
}
