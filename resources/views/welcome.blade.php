<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <br>
                    </div>
                    <div class="col-xs-6">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>タスク名</th>
                                    <th>完了ボタン</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="todo in todos" :key="todo.id">
                                    <td>@{{ todo.id }}</td>
                                    <td>@{{ todo.title }}</td>
                                    <td><button class="btn btn-primary">完了</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-xs-6">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="タスクを入力してください" v-model="new_todo">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="button" v-on:click="addTodo">登録</button>    
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
