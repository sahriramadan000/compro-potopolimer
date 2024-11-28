<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PwaController;
use App\Http\Controllers\Auth\LoginNewController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect(route('home'));
});

Route::get('/home', function () {
    return view('homepage.index');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us.index');
})->name('about-us');

// Service
Route::get('/service', function () {
    return view('service.index');
})->name('service');

Route::get('/service-detail', function () {
    return view('service.detail');
})->name('service-detail');

// =======================================
// SERVICE PLATES PRINTING
// =======================================
Route::prefix('/service-plates-printing')->name('service-plates-printing.')->group(function () {
    Route::get('/', function () {
        return view('service.plates-printing.index');
    })->name('index');

    Route::get('/liquid-polimer-plates', function () {
        $data['page_title'] = 'Liquid Polimer Plates';
        return view('service.plates-printing.liquid-polimer-plates', $data);
    })->name('liquid-polimer-plates');

    Route::get('/digital-solid-plates', function () {
        $data['page_title'] = 'Digital Solid Plates';
        return view('service.plates-printing.digital-solid-plates', $data);
    })->name('digital-solid-plates');

    Route::get('/dry-offset-plates', function () {
        $data['page_title'] = 'Dry Offset Plates';
        return view('service.plates-printing.dry-offset-plates', $data);
    })->name('dry-offset-plates');

    Route::get('/laser-film-printing', function () {
        $data['page_title'] = 'Laser Film Printing';
        return view('service.plates-printing.laser-film-printing', $data);
    })->name('laser-film-printing');

    Route::get('/letter-press', function () {
        $data['page_title'] = 'Letter Press';
        return view('service.plates-printing.letter-press', $data);
    })->name('letter-press');
});

// =======================================
// SERVICE RESIN LIQUID PRINTING
// =======================================
Route::prefix('/service-resin-polymer')->name('service-resin-polymer.')->group(function () {
    Route::get('/', function () {
        return view('service.resin-liquid-printing.index');
    })->name('index');

    Route::get('/resin-liquid-polymer', function () {
        $data['page_title'] = 'Resin Liquid Polymer';
        return view('service.resin-polymer.resin-liquid-polymer', $data);
    })->name('resin-liquid-polymer');

    Route::get('/resin-solid-polymer', function () {
        $data['page_title'] = 'Resin Solid Polymer';
        return view('service.resin-polymer.resin-solid-polymer', $data);
    })->name('resin-solid-Polymer');
});


// =======================================
// SERVICE EQUIPMENT PRINTING
// =======================================
Route::prefix('/service-equipment-printing')->name('service-equipment-printing.')->group(function () {
    Route::get('/', function () {
        return view('service.equipment-printing.index');
    })->name('index');

    Route::get('/base-film', function () {
        $data['page_title'] = 'Base Film';
        return view('service.equipment-printing.base-film', $data);
    })->name('base-film');

    Route::get('/bopp-film', function () {
        $data['page_title'] = 'BOPP Film';
        return view('service.equipment-printing.bopp-film', $data);
    })->name('bopp-film');

    Route::get('/astralon', function () {
        $data['page_title'] = 'Astralon';
        return view('service.equipment-printing.astralon', $data);
    })->name('astralon');

    Route::get('/stripping-stopper', function () {
        $data['page_title'] = 'Stripping / Stopper';
        return view('service.equipment-printing.stripping-stopper', $data);
    })->name('stripping-stopper');

    Route::get('/bonding-machine', function () {
        $data['page_title'] = 'Bonding Machine';
        return view('service.equipment-printing.bonding-machine', $data);
    })->name('bonding-machine');

    Route::get('/ablative-film', function () {
        $data['page_title'] = 'Ablative Film';
        return view('service.equipment-printing.ablative-film', $data);
    })->name('ablative-film');

    Route::get('/digital-solid', function () {
        $data['page_title'] = 'Digital Solid';
        return view('service.equipment-printing.digital-solid', $data);
    })->name('digital-solid');

    Route::get('/letter-press', function () {
        $data['page_title'] = 'Letter Press';
        return view('service.equipment-printing.letter-press', $data);
    })->name('letter-press');
});


// =======================================
// SERVICE MACHINE EQUIPMENT PRINTING
// =======================================
Route::prefix('/service-machine-and-equipment-printing')->name('service-machine-and-equipment-printing.')->group(function () {
    Route::get('/', function () {
        return view('service.machine-and-equipment-printing.index');
    })->name('index');

    Route::get('/exposure-plate-machine', function () {
        $data['page_title'] = 'Exposure Plate Machine';
        return view('service.machine-and-equipment-printing.exposure-plate-machine', $data);
    })->name('exposure-plate-machine');

    Route::get('/equipment-exposure-plate-machine', function () {
        $data['page_title'] = 'Equipment Exposure Plate Machine';
        return view('service.machine-and-equipment-printing.equipment-exposure-plate-machine', $data);
    })->name('equipment-exposure-plate-machine');
});

// Portofolio
Route::prefix('/portofolio')->name('portofolio.')->group(function () {
    Route::get('/minibox-packaging-solution', function () {
        $data['page_title'] = 'Minibox Packaging Solution';
        return view('portofolio.minibox-packaging-solution', $data);
    })->name('minibox-packaging-solution');

    Route::get('/core-corrugated-packaging', function () {
        $data['page_title'] = 'Core Corrugated Packaging';
        return view('portofolio.core-corrugated-packaging', $data);
    })->name('core-corrugated-packaging');

    Route::get('/sack-printing', function () {
        $data['page_title'] = 'Sack Printing';
        return view('portofolio.sack-printing', $data);
    })->name('sack-printing');

    Route::get('/label-manufacturing', function () {
        $data['page_title'] = 'Label Manufacturing';
        return view('portofolio.label-manufacturing', $data);
    })->name('label-manufacturing');

    Route::get('/letter-press-printing', function () {
        $data['page_title'] = 'Letter Press Printing';
        return view('portofolio.letter-press-printing', $data);
    })->name('letter-press-printing');

    Route::get('/paper-cup-production', function () {
        $data['page_title'] = 'Paper Cup Production';
        return view('portofolio.paper-cup-production', $data);
    })->name('paper-cup-production');

    Route::get('/glass-cup-and-pe-or-pp-containers', function () {
        $data['page_title'] = 'Glass Cup & PET/PP Containers';
        return view('portofolio.glass-cup-and-pe-or-pp-containers', $data);
    })->name('glass-cup-and-pe-or-pp-containers');

    Route::get('/premium-wrapping-paper', function () {
        $data['page_title'] = 'Premium Wrapping Paper';
        return view('portofolio.premium-wrapping-paper', $data);
    })->name('premium-wrapping-paper');
});

// Tools
Route::prefix('/tools')->name('tools.')->group(function () {
    Route::get('/liquid', function () {
        $data['page_title'] = 'Tools Liquid';
        return view('tools.liquid', $data);
    })->name('liquid');

    Route::get('/solid', function () {
        $data['page_title'] = 'Tools Solid';
        return view('tools.solid', $data);
    })->name('solid');
});

// News
Route::get('/news', function () {
    return view('news.index');
})->name('news');

Route::get('/news-detail', function () {
    return view('news.detail');
})->name('news-detail');

Route::get('/contact-us', function () {
    return view('contact-us.index');
})->name('contact-us');





































Route::post('/send-login', [LoginNewController::class, 'login'])->name('send-login');

// START FORGOT PASSWORD
Route::prefix('forgot-password')->name('forgot-password-')->group(function () {
    Route::get('/', [ForgotPasswordController::class, 'index'])->name('view');
    Route::post('/send-email', [ForgotPasswordController::class, 'sendEmail'])->name('send-email');
    Route::get('/reset-password', [ForgotPasswordController::class, 'reset'])->name('reset-password');
    Route::post('/proses-reset-password', [ForgotPasswordController::class, 'prosesReset'])->name('proses-reset-password');
});
// END FORGOT PASSWORD

Auth::routes();

// START ROLES
Route::prefix('roles')->name('roles-')->group(function () {
    Route::get('/', [RoleController::class, 'index'])->name('index');
    Route::get('get-data', [RoleController::class, 'getRoles'])->name('get-data');
    Route::get('modal-add', [RoleController::class, 'getModalAdd'])->name('modal-add');
    Route::post('store', [RoleController::class, 'store'])->name('store');
    Route::get('modal-edit/{roleId}', [RoleController::class, 'getModalEdit'])->name('modal-edit');
    Route::put('update/{roleId}', [RoleController::class, 'update'])->name('update');
    Route::get('modal-delete/{roleId}', [RoleController::class, 'getModalDelete'])->name('modal-delete');
    Route::delete('delete/{roleId}', [RoleController::class, 'destroy'])->name('destroy');
    Route::post('update-permission', [RoleController::class, 'updatePermissionByID'])->name('update.permission');
    Route::post('update-all-permissions', [RoleController::class, 'updateAllPermissions'])->name('update.permission');
});

// END ROLES

Route::resources([
    // 'roles' => RoleController::class,
    'users' => UserController::class,
]);
