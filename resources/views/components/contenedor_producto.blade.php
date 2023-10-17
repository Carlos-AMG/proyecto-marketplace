<div>
    <div class="col mb-5">
        <div class="card h-100">
            <!-- Product image-->
            <img class="card-img-top" src="https://via.placeholder.com/640x480.png/004466?text=animals+omnis" alt="..." />
            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">
                    <!-- Product name-->
                    <h5 class="fw-bolder">{{$producto->nombre}}</h5>
                    <!-- Product price-->
                    {{$producto->precio}}
                </div>
            </div>
            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">

                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{url('producto/'.$producto->id)}}">Mostrar</a></div>
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{url('producto/'.$producto->id.'/edit')}}">Editar</a></div>
                <div class="text-center">
                    <form action="{{url('producto/'.$producto->id)}}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-outline-dark mt-auto">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>