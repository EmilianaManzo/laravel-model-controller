@extends('layout.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col m-5">
            <h1>{{$movie->title}}</h1>
            <h3>{{$movie->original_title}}</h3>
            <p class="card-text">Plot: Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus iusto unde possimus repudiandae nam, quisquam quaerat eum adipisci dolorem repellendus nulla, natus, minus quibusdam reprehenderit velit animi! Laudantium eius quisquam, delectus illum velit sed recusandae, doloribus nesciunt officia accusantium error laboriosam, quo soluta culpa dolor possimus! Excepturi doloremque amet eveniet cumque laborum sequi modi autem, facere ipsa rem. Quaerat error praesentium nihil ipsum porro sapiente enim inventore dolore rerum odit incidunt quasi iste blanditiis aut explicabo ab placeat, aspernatur totam magnam tempore aperiam quidem! Accusamus hic repellendus sit impedit labore corporis, officiis eligendi consectetur soluta dicta non minima unde ipsum reprehenderit aliquam? Eos dolorem possimus veritatis placeat vel alias illum, sit consectetur similique, inventore eveniet nulla cum. Vero veniam deserunt numquam, id dolores laborum minus et rem eaque, facere fuga odio pariatur qui possimus reprehenderit debitis. Libero, natus officiis minima magnam tempore quia quo omnis porro blanditiis eaque dolor harum maxime dicta. Numquam in provident vero alias consequatur suscipit doloribus distinctio sint nisi illo dolorum velit, praesentium placeat. Quas delectus, eligendi, maiores tempore aperiam odio dignissimos sint omnis esse voluptas enim blanditiis ut facere inventore expedita dolore iure repudiandae alias, excepturi eos! Nesciunt illo iure sunt, deleniti impedit quos quo quibusdam doloribus odit unde magnam fugit ratione obcaecati provident porro quasi, quaerat aut ab blanditiis? Voluptates beatae eius sapiente enim? Quam modi, aut autem cum magni odit harum beatae repellat dolor dolore, molestiae cupiditate possimus deleniti maiores aliquid reiciendis a fugit quis magnam sed in repudiandae ipsum! Assumenda quis laborum deleniti consequatur, ex nobis ad quod earum maiores voluptatibus iusto soluta eius similique molestias modi? Unde, nobis aspernatur dolore commodi officia amet iste earum enim veritatis voluptates. Vel eos est dolor iusto error a dolorum rem iure architecto at. Veritatis vero aspernatur reiciendis sed expedita labore ullam nisi aliquam officiis?</p>
            <p class="card-text"><strong>Nazionalità:</strong> {{$movie->nationality}}<p>
            <p class="card-text"><strong>Data di uscita:</strong> {{$movie->date}}<p>
            <p class="card-text"><strong>Vote:</strong>{{$movie->vote}}<p>

        </div>
    </div>
</div>

@endsection
