//4.【応用】 プロフィール作成画面用に、resources/views/admin/profile/create.blade.php ファイルを作成し、3. で作成した profile.blade.phpファイルを読み込み、また プロフィールのページであることがわかるように titleとcontentを編集しましょう
//（ヒント: resources/views/admin/news/create.blade.php を参考にします）

@extends('layouts.profile')

@section('title', 'ニュースの新規作成')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1>Myプロフィール</h1>
            </div>
        </div>
    </div>
@endsection