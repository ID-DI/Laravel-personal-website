@extends('layout.main')

@section('title', 'Home')

@section('heading')
    <div class=" my-5 txt-box">
        <h1 class="mx-auto my-auto font-weight-bolder text-capitalize mt-5 mb-2">clean blog</h1>
        <p class="text-capitalize text-c-grey">a blog theme by start bootstrap</p>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto py-4">
                <div class="row">
                    <div class="col-12">
                        <h2>Lorem Ipsum</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ex non veritatis labore mollitia
                            voluptatum
                            accusantium doloribus ullam a ab sunt!</p>
                       <p class="text-secondary font-italic">Posted by <span class="text-dark font-weight-bold">John Doe</span></p>
                        <hr>
                    </div>
                    <div class="col-12">
                        <h2>Lorem Ipsum 2</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse, aperiam quo corrupti similique a
                            ducimus? Doloremque consequatur nam aliquid quo, aut, magni dignissimos quibusdam obcaecati
                            iusto
                            nesciunt voluptates, iure ut.</p>
                       <p class="text-secondary font-italic">Posted by <span class="text-dark font-weight-bold">John Doe</span> in another boring news.</p>
                        <hr>
                    </div>
                    <div class="col-12">
                        <h2>Lorem Ipsum 3</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, et quaerat fugiat quae quo
                            nulla
                            vitae necessitatibus aspernatur neque, iste veniam eveniet! Est optio vel hic dignissimos
                            voluptates
                            sint magni, at sequi a, similique nostrum veritatis excepturi laudantium delectus non!</p>
                            <p class="text-secondary font-italic">Posted by <span class="text-dark font-weight-bold">Jane Doe</span></p>
                        <hr>
                    </div>
                    <div class="col-12">
                        <h2>Lorem Ipsum 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse dicta optio aliquid id,
                            cupiditate, minus quidem non minima reprehenderit dolor magnam velit, rerum quasi nemo?</p>
                        <p class="text-secondary font-italic">Posted by <span class="text-dark font-weight-bold">Missy Doe</span></p>
                        <hr>
                    </div>
                    <div class="col-12 text-right">
                        <button class="btn btn-info">Older posts -></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection