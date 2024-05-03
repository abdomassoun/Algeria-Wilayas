<?php

enum Region
{
    case Adrar;
    case Chlef;
    case Laghouat;
    case OumElBouaghi;
    case Batna;
    case Bejaia;
    case Biskra;
    case Bechar;
    case Blida;
    case Bouira;
    case Tamanrasset;
    case Tbessa;
    case Tlemcen;
    case Tiaret;
    case TiziOuzou;
    case Alger;
    case Djelfa;
    case Jijel;
    case Se9tif;
    case Saefda;
    case Skikda;
    case SidiBelAbbes;
    case Annaba;
    case Guelma;
    case Constantine;
    case Medea;
    case Mostaganem;
    case MSila;
    case Mascara;
    case Ouargla;
    case Oran;
    case ElBayadh;
    case Illizi;
    case BordjBouArreridj;
    case Boumerdes;
    case ElTarf;
    case Tindouf;
    case Tissemsilt;
    case ElOued;
    case Khenchela;
    case SoukAhras;
    case Tipaza;
    case Mila;
    case AinDefla;
    case Naama;
    case AinTemouchent;
    case Ghardaia;
    case Relizane;
    case ElMghair;
    case ElMenia;
    case OuledDjellal;
    case BordjBajiMokhtar;
    case BeniAbbes;
    case Timimoun;
    case Touggourt;
    case Djanet;
    case InSalah;
    case InGuezzam;

    public function getCode(): string
    {
        switch ($this) {
            case self::Adrar:
                return "1";
            case self::Chlef:
                return "2";
            case self::Laghouat:
                return "3";
            case self::OumElBouaghi:
                return "4";
            case self::Batna:
                return "5";
            case self::Bejaia:
                return "6";
            case self::Biskra:
                return "7";
            case self::Bechar:
                return "8";
            case self::Blida:
                return "9";
            case self::Bouira:
                return "10";
            case self::Tamanrasset:
                return "11";
            case self::Tbessa:
                return "12";
            case self::Tlemcen:
                return "13";
            case self::Tiaret:
                return "14";
            case self::TiziOuzou:
                return "15";
            case self::Alger:
                return "16";
            case self::Djelfa:
                return "17";
            case self::Jijel:
                return "18";
            case self::Se9tif:
                return "19";
            case self::Saefda:
                return "20";
            case self::Skikda:
                return "21";
            case self::SidiBelAbbes:
                return "22";
            case self::Annaba:
                return "23";
            case self::Guelma:
                return "24";
            case self::Constantine:
                return "25";
            case self::Medea:
                return "26";
            case self::Mostaganem:
                return "27";
            case self::MSila:
                return "28";
            case self::Mascara:
                return "29";
            case self::Ouargla:
                return "30";
            case self::Oran:
                return "31";
            case self::ElBayadh:
                return "32";
            case self::Illizi:
                return "33";
            case self::BordjBouArreridj:
                return "34";
            case self::Boumerdes:
                return "35";
            case self::ElTarf:
                return "36";
            case self::Tindouf:
                return "37";
            case self::Tissemsilt:
                return "38";
            case self::ElOued:
                return "39";
            case self::Khenchela:
                return "40";
            case self::SoukAhras:
                return "41";
            case self::Tipaza:
                return "42";
            case self::Mila:
                return "43";
            case self::AinDefla:
                return "44";
            case self::Naama:
                return "45";
            case self::AinTemouchent:
                return "46";
            case self::Ghardaia:
                return "47";
            case self::Relizane:
                return "48";
            case self::ElMghair:
                return "49";
            case self::ElMenia:
                return "50";
            case self::OuledDjellal:
                return "51";
            case self::BordjBajiMokhtar:
                return "52";
            case self::BeniAbbes:
                return "53";
            case self::Timimoun:
                return "54";
            case self::Touggourt:
                return "55";
            case self::Djanet:
                return "56";
            case self::InSalah:
                return "57";
            case self::InGuezzam:
                return "58";
        }
    }

    public function getEnglishName(): string
    {
        switch ($this) {
            case self::Adrar:
                return "Adrar";
            case self::Chlef:
                return "Chlef";
            case self::Laghouat:
                return "Laghouat";
            case self::OumElBouaghi:
                return "Oum El Bouaghi";
            case self::Batna:
                return "Batna";
            case self::Bejaia:
                return "Bejaia";
            case self::Biskra:
                return "Biskra";
            case self::Bechar:
                return "Bechar";
            case self::Blida:
                return "Blida";
            case self::Bouira:
                return "Bouira";
            case self::Tamanrasset:
                return "Tamanrasset";
            case self::Tbessa:
                return "Tbessa";
            case self::Tlemcen:
                return "Tlemcen";
            case self::Tiaret:
                return "Tiaret";
            case self::TiziOuzou:
                return "Tizi Ouzou";
            case self::Alger:
                return "Algiers";
            case self::Djelfa:
                return "Djelfa";
            case self::Jijel:
                return "Jijel";
            case self::Se9tif:
                return "Setif";
            case self::Saefda:
                return "Saida";
            case self::Skikda:
                return "Skikda";
            case self::SidiBelAbbes:
                return "Sidi Bel Abbes";
            case self::Annaba:
                return "Annaba";
            case self::Guelma:
                return "Guelma";
            case self::Constantine:
                return "Constantine";
            case self::Medea:
                return "Medea";
            case self::Mostaganem:
                return "Mostaganem";
            case self::MSila:
                return "M'Sila";
            case self::Mascara:
                return "Mascara";
            case self::Ouargla:
                return "Ouargla";
            case self::Oran:
                return "Oran";
            case self::ElBayadh:
                return "El Bayadh";
            case self::Illizi:
                return "Illizi";
            case self::BordjBouArreridj:
                return "Bordj Bou Arreridj";
            case self::Boumerdes:
                return "Boumerdes";
            case self::ElTarf:
                return "El Tarf";
            case self::Tindouf:
                return "Tindouf";
            case self::Tissemsilt:
                return "Tissemsilt";
            case self::ElOued:
                return "El Oued";
            case self::Khenchela:
                return "Khenchela";
            case self::SoukAhras:
                return "Souk Ahras";
            case self::Tipaza:
                return "Tipaza";
            case self::Mila:
                return "Mila";
            case self::AinDefla:
                return "Ain Defla";
            case self::Naama:
                return "Naama";
            case self::AinTemouchent:
                return "Ain Temouchent";
            case self::Ghardaia:
                return "Ghardaia";
            case self::Relizane:
                return "Relizane";
            case self::ElMghair:
                return "El M'ghair";
            case self::ElMenia:
                return "El Menia";
            case self::OuledDjellal:
                return "Ouled Djellal";
            case self::BordjBajiMokhtar:
                return "Bordj Baji Mokhtar";
            case self::BeniAbbes:
                return "Beni Abbès";
            case self::Timimoun:
                return "Timimoun";
            case self::Touggourt:
                return "Touggourt";
            case self::Djanet:
                return "Djanet";
            case self::InSalah:
                return "In Salah";
            case self::InGuezzam:
                return "In Guezzam";
        }
    }

    public function getArabicName(): string
    {
        switch ($this) {
            case self::Adrar:
                return "أدرار";
            case self::Chlef:
                return "الشلف";
            case self::Laghouat:
                return "الأغواط";
            case self::OumElBouaghi:
                return "أم البواقي";
            case self::Batna:
                return "باتنة";
            case self::Bejaia:
                return "بجاية";
            case self::Biskra:
                return "بسكرة";
            case self::Bechar:
                return "بشار";
            case self::Blida:
                return "البليدة";
            case self::Bouira:
                return "البويرة";
            case self::Tamanrasset:
                return "تمنراست";
            case self::Tbessa:
                return "تبسة";
            case self::Tlemcen:
                return "تلمسان";
            case self::Tiaret:
                return "تيارت";
            case self::TiziOuzou:
                return "تيزي وزو";
            case self::Alger:
                return "الجزائر";
            case self::Djelfa:
                return "الجلفة";
            case self::Jijel:
                return "جيجل";
            case self::Se9tif:
                return "سطيف";
            case self::Saefda:
                return "سعيدة";
            case self::Skikda:
                return "سكيكدة";
            case self::SidiBelAbbes:
                return "سيدي بلعباس";
            case self::Annaba:
                return "عنابة";
            case self::Guelma:
                return "قالمة";
            case self::Constantine:
                return "قسنطينة";
            case self::Medea:
                return "المدية";
            case self::Mostaganem:
                return "مستغانم";
            case self::MSila:
                return "المسيلة";
            case self::Mascara:
                return "معسكر";
            case self::Ouargla:
                return "ورقلة";
            case self::Oran:
                return "وهران";
            case self::ElBayadh:
                return "البيض";
            case self::Illizi:
                return "إليزي";
            case self::BordjBouArreridj:
                return "برج بوعريريج";
            case self::Boumerdes:
                return "بومرداس";
            case self::ElTarf:
                return "الطارف";
            case self::Tindouf:
                return "تندوف";
            case self::Tissemsilt:
                return "تيسمسيلت";
            case self::ElOued:
                return "الوادي";
            case self::Khenchela:
                return "خنشلة";
            case self::SoukAhras:
                return "سوق أهراس";
            case self::Tipaza:
                return "تيبازة";
            case self::Mila:
                return "ميلة";
            case self::AinDefla:
                return "عين الدفلى";
            case self::Naama:
                return "النعامة";
            case self::AinTemouchent:
                return "عين تموشنت";
            case self::Ghardaia:
                return "غرداية";
            case self::Relizane:
                return "غليزان";
            case self::ElMghair:
                return "المغير";
            case self::ElMenia:
                return "المنيعة";
            case self::OuledDjellal:
                return "أولاد جلال";
            case self::BordjBajiMokhtar:
                return "برج باجي مختار";
            case self::BeniAbbes:
                return "بني عباس";
            case self::Timimoun:
                return "تيميمون";
            case self::Touggourt:
                return "تقرت";
            case self::Djanet:
                return "جانت";
            case self::InSalah:
                return "عين صالح";
            case self::InGuezzam:
                return "عين قزام";
        }
    }

    public function getLongitude(): float
    {
        switch ($this) {
            case self::Adrar:
                return 27.9766155;
            case self::Chlef:
                return 36.1691245;
            case self::Laghouat:
                return 33.7873735;
            case self::OumElBouaghi:
                return 35.8726014;
            case self::Batna:
                return 35.32147;
            case self::Bejaia:
                return 36.7695969;
            case self::Biskra:
                return 34.8515041;
            case self::Bechar:
                return 31.5977602;
            case self::Blida:
                return 36.4803023;
            case self::Bouira:
                return 36.2084234;
            case self::Tamanrasset:
                return 22.2746227;
            case self::Tbessa:
                return 35.4117259;
            case self::Tlemcen:
                return 34.8959541;
            case self::Tiaret:
                return 35.3599899;
            case self::TiziOuzou:
                return 36.7002068;
            case self::Alger:
                return 36.7538259;
            case self::Djelfa:
                return 34.6672467;
            case self::Jijel:
                return 36.7962714;
            case self::Se9tif:
                return 36.1905173;
            case self::Saefda:
                return 34.841945;
            case self::Skikda:
                return 36.8777912;
            case self::SidiBelAbbes:
                return 35.206334;
            case self::Annaba:
                return 36.9184345;
            case self::Guelma:
                return 36.4569088;
            case self::Constantine:
                return 36.319475;
            case self::Medea:
                return 36.2838408;
            case self::Mostaganem:
                return 35.9751841;
            case self::MSila:
                return 35.7211476;
            case self::Mascara:
                return 35.382998;
            case self::Ouargla:
                return 32.1961967;
            case self::Oran:
                return 35.7066928;
            case self::ElBayadh:
                return 32.5722756;
            case self::Illizi:
                return 26.5065999;
            case self::BordjBouArreridj:
                return 36.0686488;
            case self::Boumerdes:
                return 36.7564181;
            case self::ElTarf:
                return 36.7534258;
            case self::Tindouf:
                return 27.2460501;
            case self::Tissemsilt:
                return 35.6021906;
            case self::ElOued:
                return 33.3714492;
            case self::Khenchela:
                return 35.4263293;
            case self::SoukAhras:
                return 36.277849;
            case self::Tipaza:
                return 36.5980966;
            case self::Mila:
                return 36.4514882;
            case self::AinDefla:
                return 36.1283915;
            case self::Naama:
                return 33.1995605;
            case self::AinTemouchent:
                return 35.404044;
            case self::Ghardaia:
                return 32.5891743;
            case self::Relizane:
                return 35.8050195;
            case self::ElMghair:
                return 33.947222;
            case self::ElMenia:
                return 30.579167;
            case self::OuledDjellal:
                return 34.433333;
            case self::BordjBajiMokhtar:
                return 21.327778;
            case self::BeniAbbes:
                return 30.133333;
            case self::Timimoun:
                return 29.258333;
            case self::Touggourt:
                return 33.108333;
            case self::Djanet:
                return 24.554167;
            case self::InSalah:
                return 27.197222;
            case self::InGuezzam:
                return 19.572222;
        }
    }

    public function getLatitude(): float
    {
        switch ($this) {
            case self::Adrar:
                return -0.20396;
            case self::Chlef:
                return 1.3539002;
            case self::Laghouat:
                return 2.8829115;
            case self::OumElBouaghi:
                return 7.1180248;
            case self::Batna:
                return 3.1066502;
            case self::Bejaia:
                return 5.0085855;
            case self::Biskra:
                return 5.7246709;
            case self::Bechar:
                return -1.8540446;
            case self::Blida:
                return 2.8009379;
            case self::Bouira:
                return 3.925049;
            case self::Tamanrasset:
                return 5.6754684;
            case self::Tbessa:
                return 8.110545;
            case self::Tlemcen:
                return -1.3150979;
            case self::Tiaret:
                return 1.3916159;
            case self::TiziOuzou:
                return 4.075957;
            case self::Alger:
                return 3.057841;
            case self::Djelfa:
                return 3.2993118;
            case self::Jijel:
                return 5.7504845;
            case self::Se9tif:
                return 5.4202134;
            case self::Saefda:
                return 0.1483583;
            case self::Skikda:
                return 6.9357204;
            case self::SidiBelAbbes:
                return -0.6301368;
            case self::Annaba:
                return 7.7452755;
            case self::Guelma:
                return 7.433858;
            case self::Constantine:
                return 6.6141084;
            case self::Medea:
                return 36.2645341;
            case self::Mostaganem:
                return 35.7559038;
            case self::MSila:
                return 35.7011939;
            case self::Mascara:
                return 35.3999797;
            case self::Ouargla:
                return 31.9517067;
            case self::Oran:
                return 35.6911114;
            case self::ElBayadh:
                return 30.5712569;
            case self::Illizi:
                return 26.4922256;
            case self::BordjBouArreridj:
                return 36.0797404;
            case self::Boumerdes:
                return 36.765144;
            case self::ElTarf:
                return 36.7575912;
            case self::Tindouf:
                return 27.6724665;
            case self::Tissemsilt:
                return 35.6182893;
            case self::ElOued:
                return 33.3582151;
            case self::Khenchela:
                return 35.4292096;
            case self::SoukAhras:
                return 36.290724;
            case self::Tipaza:
                return 36.5717119;
            case self::Mila:
                return 36.4412243;
            case self::AinDefla:
                return 36.2505511;
            case self::Naama:
                return 32.8024656;
            case self::AinTemouchent:
                return 35.3048541;
            case self::Ghardaia:
                return 32.489517;
            case self::Relizane:
                return 35.7380775;
            case self::ElMghair:
                return 32.375278;
            case self::ElMenia:
                return 32.295556;
            case self::OuledDjellal:
                return 34.461944;
            case self::BordjBajiMokhtar:
                return 21.315833;
            case self::BeniAbbes:
                return 30.133333;
            case self::Timimoun:
                return 29.258333;
            case self::Touggourt:
                return 33.108333;
            case self::Djanet:
                return 24.554167;
            case self::InSalah:
                return 27.197222;
            case self::InGuezzam:
                return 19.572222;
        }
    }
}