<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PublicController extends Controller
{
    public $services = [
        [
            'img' => 'corso-tecnico-informatico-b9030a8a.jpeg',
            'service' => 'Assistenza 24su24',
            'description' => 'Possibile assistenza sui prodotti fino ad 1 anno dall acquisto',
            'number' => '',

        ],
        [
            'img' => 'barriera-shop-online.jpg',
            'service' => 'Negozio online',
            'description' => 'Il nostro negozio mette a disposizione oltre 10mila prodotti e 120 marche tra cui scegliere. Cosa aspetti la spedizione è gratuita!',
            'number' => '',

        ],
        [
            'img' => 'servizio clienti.webp',
            'service' => 'Servizio clienti',
            'description' => "Per info o problemi su ordini e quant'altro non esitate a contattarci",
            'number' => 375869564,

        ]

    ];
    public function homepage()
    {
        return view('welcome', ['services' => $this->services]);
    }

    public $staff =
    [

        [
            'name' => 'Tiziano',
            'surname' => 'Palazzini',
            'ruolo' => 'Responsabile della vendita',
            'img' => 'avatar maschio.jpg '
        ],

        [
            'name' => 'Tiziana',
            'surname' => 'Palazzini',
            'ruolo' => 'Responsabile della vendita',
            'img' => 'avatar-predefinito-per-femmina.webp'
        ],

        [
            'name' => 'Sofia',
            'surname' => 'Rovazza',
            'ruolo' => 'Responsabile della vendita',
            'img' => 'avatar-predefinito-per-femmina.webp'
        ]

    ];
    public function chisiamo()
    {
        return view('chisiamo', ['staff' => $this->staff]);
    }

    public $products = [

        [
            "id" => 1,
            "nome" => "Smartphone",
            "prezzo" => 599.99
        ],
        [
            "id" => 2,
            "nome" => "Tablet",
            "prezzo" => 799.99,
        ],
        [
            "id" => 3,
            "nome" => "Laptop",
            "prezzo" => 1299.99,
        ],

        [
            "id" => 4,
            "nome" => "Smartwatch",
            "prezzo" => 299.99,
        ],
        [
            "id" => 5,
            "nome" => "Televisore",
            "prezzo" => 1499.99,
        ],
        [
            "id" => 6,
            "nome" => "Cuffie wireless",
            "prezzo" => 199.99,
        ],
        [
            "id" => 7,
            "nome" => "Altoparlante Bluetooth",
            "prezzo" => 129.99,
        ],

        [
            "id" => 8,
            "nome" => "Fotocamera digitale",
            "prezzo" => 599.99,
        ],
        [
            "id" => 9,
            "nome" => "Drone",
            "prezzo" => 999.99
        ],
        [
            "id" => 10,
            "nome" => "Console per videogiochi",
            "prezzo" => 399.99,
        ],
        [
            "id" => 11,
            "nome" => "Stampante",
            "prezzo" => 199.99,
        ],
        [
            "id" => 12,
            "nome" => "Router Wi-Fi",
            "prezzo" => 129.99,
        ],
        [
            "id" => 13,
            "nome" => "Monitor",
            "prezzo" => 349.99,
        ],
        [
            "id" => 14,
            "nome" => "Tastiera gaming",
            "prezzo" => 149.99,
        ],
        [
            "id" => 15,
            "nome" => "Mouse gaming",
            "prezzo" => 99.99
        ],
        [
            "id" => 16,
            "nome" => "Webcam",
            "prezzo" => 79.99,
        ],
        [
            "id" => 17,
            "nome" => "Hard disk esterno",
            "prezzo" => 129.99,
        ],
        [
            "id" => 18,
            "nome" => "SSD interno",
            "prezzo" => 299.99,
        ],
        [
            "id" => 19,
            "nome" => "Scheda grafica",
            "prezzo" => 799.99,
        ],
        [
            "id" => 20,
            "nome" => "Case per PC",
            "prezzo" => 99.99
        ]
    ];

    public function products()
    {
        return view('prodotti', ['products' => $this->products]);
    }

    public function showProducts($id)
    {
        foreach ($this->products as $product) {
            if ($product['id'] == $id) {
                return view('detailsCard', ['showProducts' => $this->products]);
            }
        }
    }

    public function searchProduct(Request $request)
    {
        // $resultProduct = [];
        $searchProduct = $request->query('searchProduct');
        foreach ($this->products as $product) {
            if (Str::contains(strtolower($product['nome']), strtolower($searchProduct))) {
                $resultProduct[] = $product;
            }
        }
        @dd($resultProduct);
    }


    public function thanksPage()
    {
        return view('/thanks');
    }


    public function createProduct()
    {
        return view('/create');
    }

    public function store(Request $request)
    {
        // $path = $request->file('avatar')->store('avatars');
        Product::create([
            'nome' => $request->input('nome'),
            'marca' => $request->input('marca'),
            'tipologia' => $request->input('tipologia')
        ]);
        // $nome = $request->input('nome');
        // $marca = $request->input('marca');
        // $tipologia = $request->input('tipologia');

        // $product = new Product();
        // $product->nome = $nome;
        // $product->marca = $marca;
        // $product->tipologia = $tipologia;

        // $product->save();
        return redirect()->route('prodotti')->with('message', 'Valuteremo il prodotto inserito!');
    }

    public function newProduct()
    {
        $products = Product::all();
        return view('newproduct', compact('products'));
    }
}
