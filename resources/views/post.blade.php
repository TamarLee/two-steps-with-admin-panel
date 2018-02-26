@extends('layouts')

@section('content')

 <!-- lessons -->
    <div class="container mt-4">
      <div class="row">
          <div class="col-lg-8">
            <div class="tetri">
              <a href="#" class="btn btn-secondary"><img src="img/icon3.png" class="img-btn"> ქართული</a>
              <div class="float-right">
                <a href="#" class="btn btn-secondary"><i class="fa fa-instagram"></i></a>
                <a href="#" class="btn btn-secondary"><i class="fa fa-twitter"></i></a>
                <a href="#" class="btn btn-secondary"><i class="fa fa-facebook"></i></a>
              </div>
              <h3 class="my-4">სწრაფი ვახშამი მოუცლელი მანდილოსნებისთვის</h3>
              <div class="">
                <p class="d-inline">
                  <i class="fa fa-calendar"></i> 26მაისი
                  <i class="fa fa-user ml-3"></i> ავტორი: გიორგი გულაშვილი
                </p>
              </div>
              <div class="meat"></div>
              <h6>შემადგენლობა</h6>
              <ul class="py-5 lul">
                <li><span>1/2 დაჭრილი ქათამი</span></li>
                <li><span>4 ნაჭერი ბეკონი</span></li>
                <li><span>3/4 ჭიქა შაქარი</span></li>
                <li><span>1 თავი ხახვი(დაჭრილი)</span></li>
              </ul>

              <h4 class="mb-5">მომზადების წესი</h4>
              <div class="">
                <p>მაკარონი მოვხარშოთ.ბეკონი შევწვათ. ტაფაზე გავადნოთ კარაქი და მოვათავსოთ ქათმის ხორცი, შევწვათ</p>
                <p>კარგად. დავამატოთ დაჭრილი ხახვი და ნიორი, ქათმის ბულიონი, ცოტა წყალი და კარგად ავურიოთ.</p>
                <p>გავაჩეროთ 5 წუთი, შემდეგ დავამატოთ შემწვარი ბეკონი, მოხარშული მაკარონი. ოხრახუში, მარილი,</p>
                <p>პილპილი, პარმეზანი და კარგად ავურიოთ.</p>
              </div>

            </div>
          </div>
          <div class="col-lg-4">
            <div class="tetri">
        <div class="">
          <h5 class="pt-3 center">კულინარიის გაკვეთილები</h5>
        </div>
        @foreach($tags as $tag)
        <a href="{{ $tag->link }}" class="btn btn-secondary my-2 form-control text-left"><img src="img/{{ $tag->image }}" class="img-btn">{{ $tag->title }}</a>
        @endforeach
          <p class="center pt-3"><a href="#">ყველას ნახვა</a></p>
          </div>

            <div class="rollme d-none d-xl-block">
                <p><a href="#">პოპულარული</a> შეთავაზებები</p>
                <div id="qww" class="float-left mr-2"></div>
                  <small class="my-5">დაბალი კალორიული ნამცხვარი თხილით და თაფლით</small>
                  <button class="btn btn-sm btn-secondary d-block"><i class="fa fa-angle-right"></i></button>
                  <div class="left"></div>
                <div id="qww" class="float-left mr-2"></div>
                  <small class="my-5">დაბალი კალორიული ნამცხვარი თხილით და თაფლით</small>
                  <button class="btn btn-sm btn-secondary d-block"><i class="fa fa-angle-right"></i></button>
                  <div class="left"></div>
                <div id="qww" class="float-left mr-2"></div>
                  <small class="my-5">დაბალი კალორიული ნამცხვარი თხილით და თაფლით</small>
                  <button class="btn btn-sm btn-secondary d-block"><i class="fa fa-angle-right"></i></button>
                  <div class="left"></div>
                  <hr>
                  <a href=""><p class="gray">ნახე მეტი</p></a>
              </div>
          </div>
      </div>
    </div>


@endsection