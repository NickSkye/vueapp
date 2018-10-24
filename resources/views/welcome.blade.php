<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script src="https://unpkg.com/vue"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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

            .card{
                width: 300px;
                height: 500px;
                border: 1px solid;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                margin: 100px;
            }

            .card-holder{
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .tab-button {
                padding: 6px 10px;
                border-top-left-radius: 3px;
                border-top-right-radius: 3px;
                border: 1px solid #ccc;
                cursor: pointer;
                background: #f0f0f0;
                margin-bottom: -1px;
                margin-right: -1px;
            }
            .tab-button:hover {
                background: #e0e0e0;
            }
            .tab-button.active {
                background: #e0e0e0;
            }
            .tab {
                border: 1px solid #ccc;
                padding: 10px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <example-component></example-component>
        </div>
        <div id="root" class="card-holder">
            <input type="text" id="input" v-model="message">
            <p> The value of the input is : @{{message}}</p>
            <card-component></card-component>
        </div>
        <div id="example-1">
            <button @click="counter += 1">Add 1</button>
            <p>The button above has been clicked @{{ counter }} times.</p>
        </div>
        <div id="components-demo">
            <button-counter></button-counter>
            <button-counter></button-counter>
            <button-counter></button-counter>
        </div>

        <div id="dynamic-component-demo" class="demo">
            <button
                    v-for="tab in tabs"
                    v-bind:key="tab.name"
                    v-bind:class="['tab-button', { active: currentTab.name === tab.name }]"
                    v-on:click="currentTab = tab"
            >@{{ tab.name }}</button>

            <component
                    v-bind:is="currentTab.component"
                    class="tab"
            ></component>
        </div>


        <script src="https://unpkg.com/vue@2.5.17/dist/vue.js"></script>
        <script src="/js/app.js"></script>

    </body>
</html>
