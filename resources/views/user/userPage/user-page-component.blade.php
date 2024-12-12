<div>
    <!-- ======= Modernized Menu Section ======= -->
    <section id="menu" class="menu bg-light py-5">
        <div class="container">

            <!-- Section Header -->
            <div class="text-center mb-5">
                <h2 class="text-primary">Explore Our Menu</h2>
                <p class="text-muted">Delight your taste buds with our finest offerings.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="/categories" wire:navigate class="btn btn-outline-primary">Admin Page</a>
                    <a href="/logout" wire:navigate class="btn btn-outline-danger">Logout</a>
                    <a href="/foods-in-cart" class="btn btn-outline-success position-relative">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5ZM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102ZM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                        </svg>
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-success">
                            {{$foodCount}}
                        </span>
                    </a>
                </div>
            </div>

            <!-- Category Filters -->
            <div class="d-flex justify-content-center mb-4">
                <ul class="nav nav-pills">
                    <li class="nav-item">
                        <button wire:click="$set('filtercategory_id', '')" class="nav-link active">All</button>
                    </li>
                    @foreach ($categories as $category)
                    <li class="nav-item">
                        <button wire:click="filterCategory({{$category->id}})" class="nav-link">{{ $category->name }}</button>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Food Items -->
            <div class="row g-4">
                @if ($foods->isEmpty())
                <div class="col-12 text-center">
                    <p class="text-muted fs-5">No food items available right now. Check back later!</p>
                </div>
                @else
                @foreach ($foods as $food)
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm">
                        <img src="{{ asset('storage/' . $food->image_path) }}" class="card-img-top" alt="{{ $food->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $food->name }}</h5>
                            <p class="card-text text-muted">${{ $food->price }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                @if (session('foods') && collect(session('foods'))->contains('id', $food->id))
                                <span class="badge bg-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 11.03a.75.75 0 0 0 1.08.02l3.992-4.99a.75.75 0 1 0-1.15-.96L7.475 9.58 5.65 7.796a.75.75 0 1 0-1.1 1.02l2.42 2.215z" />
                                    </svg>
                                    Added
                                </span>
                                @else
                                <button wire:click="addToCart('{{ $food->id }}')" class="btn btn-primary btn-sm">
                                    Add to Cart
                                </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </section>
</div>
