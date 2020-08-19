@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($profiles as $profile)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <table>
                                    <tr>
                                        <th>{{ $profile->created_at->format('Y年m月d日') }}</th>
                                    </tr>
                                    <tr>
                                        <td>名前</td>
                                        <td>{{ str_limit($profile->name, 10) }}</td>
                                    </tr>
                                    <tr>
                                        <td>性別</td>
                                        <td>{{ str_limit($profile->gender, 5) }}</td>
                                    </tr>
                                    <tr>
                                        <td>趣味</td>
                                        <td>{{ str_limit($profile->hobby, 30) }}</td>
                                    </tr>
                                    <tr>
                                        <td>自己紹介</td>
                                        <td>{{ str_limit($profile->introduction, 30) }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
