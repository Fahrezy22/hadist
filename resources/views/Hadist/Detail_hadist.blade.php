@extends('Layouts.User.Base')
@section('content')
    <div class="container mt-2">
        <ul class="nav nav-pills nav-black justify-content-center" id="pills-tab-with-icon" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Pilihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Pilihan 2</a>
            </li>
        </ul>
        <div class="tab-content mt-2 mb-3" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="text-center mt-4">
                    <h2 class="mb-4"><b>97 | AL-Qadr (5)</b></h2>
                    <h1 class="size mb-3"><b>بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</b></h1>
                </div>
                <table width="100%">
                    <tr>
                        <td><p class="text-right size">اِنَّآ اَنْزَلْنٰهُ فِيْ لَيْلَةِ الْقَدْرِ ١</p></td>
                    </tr>
                    <tr>
                        <td><p class="">| Sesungguhnya Kami telah menurunkannya (Al-Qur’an) pada Lailatulqadar.</p></td>
                    </tr>
                </table>
                <hr>
                <table width="100%">
                    <tr>
                        <td><p class="text-right size">وَمَآ اَدْرٰىكَ مَا لَيْلَةُ الْقَدْرِۗ ٢</p></td>
                    </tr>
                    <tr>
                        <td><p class="">| Tahukah kamu apakah Lailatulqadar itu?</p></td>
                    </tr>
                </table>
                <hr>
                <table width="100%">
                    <tr>
                        <td><p class="text-right size">لَيْلَةُ الْقَدْرِ ەۙ خَيْرٌ مِّنْ اَلْفِ شَهْرٍۗ ٣</p></td>
                    </tr>
                    <tr>
                        <td><p class="">| Lailatulqadar itu lebih baik daripada seribu bulan.</p></td>
                    </tr>
                </table>
                <hr>
                <table width="100%">
                    <tr>
                        <td><p class="text-right size">تَنَزَّلُ الْمَلٰۤىِٕكَةُ وَالرُّوْحُ فِيْهَا بِاِذْنِ رَبِّهِمْۚ مِنْ كُلِّ اَمْرٍۛ ٤</p></td>
                    </tr>
                    <tr>
                        <td><p class="">| Pada malam itu turun para malaikat dan Rūḥ (Jibril) dengan izin Tuhannya untuk mengatur semua urusan.</p></td>
                    </tr>
                </table>
                <hr>
                <table width="100%">
                    <tr>
                        <td><p class="text-right size">سَلٰمٌ ۛهِيَ حَتّٰى مَطْلَعِ الْفَجْرِ ࣖ ٥</p></td>
                    </tr>
                    <tr>
                        <td><p class="">| Sejahteralah (malam) itu sampai terbit fajar.</p></td>
                    </tr>
                </table>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.
                </p>
            </div>
        </div>        
    </div>
@endsection