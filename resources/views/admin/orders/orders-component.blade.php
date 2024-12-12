<div>
    <!-- Page Header -->
    <section class="content-header bg-primary text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Order Management Board</h1>
                    <p>Monitor and update the status of customer orders in real time</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Order Sections -->
    <section class="content py-4">
        <div class="container">
            <div class="row gy-4">
                <!-- Waiting Orders -->
                <div class="col-md-6 col-lg-3">
                    <div class="card shadow-lg">
                        <div class="card-header bg-warning text-dark">
                            <h5 class="mb-0">Waiting</h5>
                        </div>
                        <div class="card-body" style="height: 400px; overflow-y: auto;">
                            @foreach ($orders->where('status', 'waiting') as $order)
                                <div class="order-card p-3 mb-3 border border-warning rounded">
                                    <h6 class="fw-bold text-dark">Order #{{ $order->queue }}</h6>
                                    <ul class="list-unstyled mb-2">
                                        @foreach ($order->orderItems as $item)
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>{{ $item->food->name }} ({{ $item->quantity }}x)</span>
                                                <input type="checkbox"
                                                    wire:change="switchOrderItemStatus({{ $order->id }}, {{ $item->id }})"
                                                    {{ $item->status === 'done' ? 'checked disabled' : '' }} />
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- In Progress Orders -->
                <div class="col-md-6 col-lg-3">
                    <div class="card shadow-lg">
                        <div class="card-header bg-info text-white">
                            <h5 class="mb-0">In Progress</h5>
                        </div>
                        <div class="card-body" style="height: 400px; overflow-y: auto;">
                            @foreach ($orders->where('status', 'in_progress') as $order)
                                <div class="order-card p-3 mb-3 border border-info rounded">
                                    <h6 class="fw-bold text-info">Order #{{ $order->queue }}</h6>
                                    <ul class="list-unstyled mb-2">
                                        @foreach ($order->orderItems as $item)
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>{{ $item->food->name }}</span>
                                                <input type="checkbox"
                                                    wire:change="switchOrderItemStatus({{ $order->id }}, {{ $item->id }})"
                                                    {{ $item->status === 'done' ? 'checked disabled' : '' }} />
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Done Orders -->
                <div class="col-md-6 col-lg-3">
                    <div class="card shadow-lg">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Done</h5>
                        </div>
                        <div class="card-body" style="height: 400px; overflow-y: auto;">
                            @foreach ($orders->where('status', 'done') as $order)
                                <div class="order-card p-3 mb-3 border border-success rounded">
                                    <h6 class="fw-bold text-success">Order #{{ $order->queue }}</h6>
                                    <ul class="list-unstyled mb-2">
                                        @foreach ($order->orderItems as $item)
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>{{ $item->food->name }}</span>
                                                <input type="checkbox"
                                                    wire:change="switchOrderItemStatus({{ $order->id }}, {{ $item->id }})"
                                                    {{ $item->status === 'done' ? 'checked disabled' : '' }} />
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- In Hand Orders -->
                <div class="col-md-6 col-lg-3">
                    <div class="card shadow-lg">
                        <div class="card-header bg-dark text-white">
                            <h5 class="mb-0">In the waiters</h5>
                        </div>
                        <div class="card-body" style="height: 400px; overflow-y: auto;">
                            @foreach ($orders->where('status', 'in_hand') as $order)
                                <div class="order-card p-3 mb-3 border border-dark rounded">
                                    <h6 class="fw-bold text-dark">Order #{{ $order->queue }}</h6>
                                    <ul class="list-unstyled mb-2">
                                        @foreach ($order->orderItems as $item)
                                            <li class="d-flex justify-content-between align-items-center">
                                                <span>{{ $item->food->name }}</span>
                                                <input type="checkbox"
                                                    wire:change="switchOrderItemStatus({{ $order->id }}, {{ $item->id }})"
                                                    {{ $item->status === 'done' ? 'checked disabled' : '' }} />
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
