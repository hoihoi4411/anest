@include('layouts.header')
        <!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron jeducation">
    <div class="container">
        <div class="row">
            <
            <div class="col-md-12 jtitle">
                <h1>_____Tổ kiến_____</h1>

                <h1>Vừa học vừa chơi</h1>
            </div>

        </div>
    </div>
</div>

<div class="container jClass">
    <div class="row">
        @foreach($classes as $classe)


            @if($classe->id%2 ==1)
                <div class="col-md-12">
                    @if($classe->id != 1)
                        <hr class="content_divider">
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <img src="./img/{{$classe->img}}.jpg" alt="{!! $classe->name !!}" class="img-thumbnail">
                        </div>
                        <div class="col-md-8">
                            <h3 class="column_title"><a href="/khoa-hoc/ios">{!! $classe->name !!}</a></h3>

                            <div>{!! $classe->text !!}
                            </div>

                        </div>
                    </div>
                </div>
            @else
                <div class="col-md-12">
                    @if($classe->id != 1)
                        <hr class="content_divider">
                    @endif
                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="column_title"><a href="/khoa-hoc/ios">{!! $classe->name !!}</a></h3>

                            <div>{!! $classe->text !!}
                            </div>

                        </div>
                        <div class="col-md-4">
                            <img src="./img/{{$classe->img}}.jpg" alt="{!! $classe->name !!}" class="img-thumbnail">
                        </div>

                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
@include('layouts.footer')