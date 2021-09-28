<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project || create</title>
    {{--  style ref  --}}
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/bulma.min.css">
    <style>
        main.container{
            margin-top: 20%;
        }
        .box{
            background-color:snow;
        }
    </style>

</head>
<body>

    <main class="container">
        <div id="root">
            <div class="columns is-centered">
                <form action="{{ route('projectStore') }}" class="box" method="post" @submit.prevent="onSubmit" @keydown="erreurs.clear($event.target.name)">
                    @csrf
                    <div class="field">
                        <label for="name">Name</label>
                        <div class="control">
                            <input type="text" id="name" name="name" placeholder="name" class="input" v-model="name" >
                        </div>
                        <p class="help is-danger" v-if="erreurs.has('name')" v-text="erreurs.get('name')"></p>
                    </div>
                    <div class="field">
                        <label for="description">Description</label>
                        <div class="control">
                            <input type="text" id="description" name="description" placeholder="description" class="input" v-model="description">
                        </div>
                        <p class="help is-danger" v-if="erreurs.has('description')" v-text="erreurs.get('description')"></p>
                    </div>
                    <button class="button is-primary" type="submit" :disabled="erreurs.any()">valider</button>
                </form>    
            </div>
        </div>
        
    </main>


    



    <script src="/js/vue2.js"></script>
    <script src="/js/axios.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>