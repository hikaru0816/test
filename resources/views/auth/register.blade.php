@extends('layouts.layout')

@section('content')
    <div class="signupPage">
        <header class="header">
            <div>アカウントを作成</div>
        </header>
            <div class="container">
                <form action="{{ route('register') }}" method="post" class="form mt-5" enctype="multipart/form-data">
                    @csrf
                    <label for="file_photo" class="rounded-circle userProfileImg">
                        <div class="userProfileImg_description">画像をアップロード</div>
                        <i class="fas fa-camera fa-3x"></i>
                        <input type="file" name="img_name" id="file_photo">
                    </label>
                    <div class="userImgPreview" id="userImgPreview">
                        <img src="" id="thumbnail" class="userImgPreview_content">
                        <p class="userImgPreview_text">画像をアップロード済み</p>
                    </div>
                    <div class="form-group @error('name')has-error @enderror">
                        <label>名前</label>
                        <input type="text" name="name" class="form-control" placeholder="名前を入力" value="{{old('name')}}">
                        @error('name')
                            <span class="errorMessage">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group @error('email')has-error @enderror">
                        <label>メールアドレス</label>
                        <input type="email" name="email" class="form-control" placeholder="メールアドレスを入力" value="{{old('email')}}">
                        @error('email')
                            <span class="errorMessage">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group @error('password')has-error @enderror">
                        <label>パスワード</label>
                        <em>6文字以上で入力してください</em>
                        <input type="password" name="password" class="form-control" placeholder="パスワードを入力">
                        @error('password')
                            <span class="errorMessage">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>確認用パスワード</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="パスワードを再度入力">
                    </div>
                    <div class="form-group @error('email')has-error @enderror">
                        <div>
                            <label>性別</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="sex" id="inlineRadio1" class="form-check-input" value="0" checked>
                            <label class="form-check-label" for="inlineRadio1">男</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" name="sex" id="inlineRadio2" class="form-check-input" value="1">
                            <label class="form-check-label" for="inlineRadio2">女</label>
                        </div>
                    </div>
                    <div class="form-group @error('self_introduction')has-error @enderror">
                        <label>自己紹介文</label>
                        <textarea name="self_introduction" class="form-control" rows="10"></textarea>
                        @error('self_introduction')
                            <span class="errorMessage">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn submitBtn">はじめる</button>
                        <div class="linkToLogin">
                            <a href="{{route('login')}}">ログインはこちら</a>
                        </div>
                    </div>
                </form>

            </div>
    </div>
@endsection
