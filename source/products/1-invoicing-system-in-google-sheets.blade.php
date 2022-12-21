@php
    $title       = 'Invoicing System in Google Sheets';
    $description = 'Invoicing System in Google Sheets is a template that helps you to create invoices in Google Sheets. It is a simple and easy to use. You can use to create invoices for your clients.';
@endphp

@extends('_layouts.product')

@section('body')
<div class="font-body text-zinc-800">
        <div class="bg-cover bg-center bg-no-repeat" style="background-image: url('https://images.unsplash.com/photo-1618005182384-a83a8bd57fbe?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1800&q=80')">
            <div class="mx-auto max-w-5xl">
            <div class="pb-16">
                <div class="flex items-center">
                <div class="basis-5/12 rounded-b-xl bg-white shadow-2xl">
                    <div class="px-8 pt-12 pb-8">
                    <div class="mb-8">
                        <img class="max-h-8" src="https://templid.com/img/logo.png" alt="Templid logo" />
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold">Invoicing System in Google Sheets</h1>
                    </div>
                    <div class="mt-8 ml-4 text-xl text-zinc-600">Price: <span class="text-2xl font-semibold text-zinc-800">$39</span> USD</div>
                    <div class="mb-12 mt-4">
                        <div class="inline-block">
                        <div class="border-2 bg-sky-400 border-sky-400 rounded-full overflow-hidden">
                            <div class="grid grid-cols-3">
                            <div class="rounded-full bg-sky-400 pl-4 pr-2 text-white flex items-center justify-center">
                                <div class="font-semibold">Bonus</div>
                            </div>
                            <div class="bg-white ml-2 pl-2 pr-4 py-2 text-sky-500 col-span-2 font-semibold">Free setup assistance</div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="mb-8">
                        <div class="mb-3">
                        <label for="form-name" class="text-zinc-600 px-4 pb-2 block">Name <span class="px-2 pb-1 text-rose-600 hidden" id="name-error">Please enter your name</span></label>
                        <div><input type="text" name="name" id="form-name" class="border border-zinc-300 rounded-sm h-10 w-full px-4" placeholder="Your name"></div>
                        </div>
                        <div>
                        <label for="form-email" class="text-zinc-500 px-4 pb-2 block">Email <span class="px-2 pb-1 text-rose-600 hidden" id="email-error">Please enter your email</span></label>
                        <div><input type="email" name="email" id="form-email" class="border border-zinc-300 rounded-sm h-10 w-full px-4" placeholder="You email"></div>
                        </div>
                    </div>
                    <div id="smart-button-container">
                        <div style="text-align: center;">
                        <div id="paypal-button-container"></div>
                        </div>
                    </div>
                    <div class="border-l-8 pl-3 border-green-500 hidden" id="success-message">
                        <h3 class="font-semibold mb-2">Thank you for your payment!</h3>
                        <p>Please note, we are sending copy manually, so <span class="font-semibold underline">it might take 1 business day to deliver your copy to your email</span>.</p>
                    </div>
                    </div>
                </div>
                <div class="basis-7/12">
                    <div class="flex justify-center pt-12">
                    <div class="relative h-[456px] w-full">
                        <img class="absolute right-0 w-[540px] top-[45px] opacity-80" src="https://templid.github.io/img/invoice-source-example.png">
                        <img class="absolute right-0 w-[420px] shadow-2xl" src="https://templid.github.io/img/invoice-example.png">
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="py-14">
            <div class="mx-auto max-w-5xl">
            <h2 class="text-2xl font-bold text-center text-zinc-600">What will you get?</h2>
            <div class="flex flex-wrap mt-5">
                <div class="p-2 sm:w-1/2 w-full">
                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-violet-700 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                    <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="title-font font-medium">Ready to use Google sheets copy</span>
                </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-violet-700 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                    <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="title-font font-medium">Full control</span>
                </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-violet-700 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                    <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="title-font font-medium">All the formulas and functions</span>
                </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-violet-700 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                    <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="title-font font-medium">Automated invoice generator</span>
                </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-violet-700 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                    <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="title-font font-medium">Send invoice email right from the document</span>
                </div>
                </div>
                <div class="p-2 sm:w-1/2 w-full">
                <div class="bg-gray-100 rounded flex p-4 h-full items-center">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-violet-700 w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                    <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                    <path d="M22 4L12 14.01l-3-3"></path>
                    </svg>
                    <span class="title-font font-medium">Setup assistance</span>
                </div>
                </div>
            </div>
            </div>
        </div>

        <div class="py-14 bg-zinc-50">
            <div class="mx-auto max-w-5xl">
            <h2 class="text-2xl font-bold text-center text-zinc-600">Watch how it works</h2>
            <div class="mt-5">
                <div class="max-w-xl mx-auto">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/jDYClRItWE0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            </div>
        </div>

        <div class="py-14">
            <div class="mx-auto max-w-5xl">
            <h2 class="text-2xl font-bold text-center text-zinc-600">Have questions?</h2>
            <div class="text-center mt-5">
                <div class="mb-2">Write us:</div>
                <div><a class="text-sky-500 transition-colors duration-200 transform hover:text-sky-800 hover:underline underline-offset-4" href="mailto:info@templid.com">
        info@templid.com</a></div>
            </div>
            </div>
        </div>
</div>

<script src="https://www.paypal.com/sdk/js?client-id=AepKyjnfohzWThco-zu-L0rHvsrFc1RoZO2BfuHZor-vIcQLjpR2mTxvriuyRZUxVAOz77sfzI3IKY8e&currency=USD" data-sdk-integration-source="button-factory"></script>

<script>
initPayPal();

function initPayPal()
{
    if (typeof(paypal) != "undefined") {
        initPayPalButton();

        return;
    }

    setTimeout(function() {
        initPayPal();
    }, 300);
}

function initPayPalButton() {
    let purchaseName = '';
    let purchaseEmail = '';

    paypal.Buttons({
        style: {
        shape: 'rect',
        color: 'gold',
        layout: 'vertical',
        label: 'paypal',

        },

        onClick: function() {
            document.querySelector('#name-error').classList.add('hidden');
            document.querySelector('#email-error').classList.add('hidden');

            purchaseName = document.querySelector('#form-name').value;
            purchaseEmail = document.querySelector('#form-email').value;
            
            if (purchaseName.length < 1) {
                document.querySelector('#name-error').classList.remove('hidden');
                return false;
            }
            
            if (!validateEmail(purchaseEmail)) {
                document.querySelector('#email-error').classList.remove('hidden');
                return false;
            }
        },

        createOrder: function(data, actions) {
            let orderAction = actions.order.create({
                purchase_units: [
                    {
                        "description":"Google sheets invoicing system",
                        "amount": { "currency_code": "USD","value": 39 },
                    }
                ],
            });

            return orderAction;
        },

        onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
                const notify = {
                    transactionID: orderData.purchase_units[0].payments.captures[0].id,
                    payerEmail: purchaseEmail,
                    payerName: purchaseName,
                }

                const requestData = {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify(notify)
                };

                const element = document.getElementById('paypal-button-container');
                element.innerHTML = 'Loading...';

                fetch("https://simple-order-purchase-tpyi5fbmfq-uc.a.run.app", requestData)
                    .then(response => response.json())
                    .then(function() {
                        element.innerHTML = '';

                        document.querySelector('#success-message').classList.remove('hidden');
                    });
            });
        },

        onError: function(err) {
            console.log(err);
        }
    }).render('#paypal-button-container');
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
</script>
@endsection