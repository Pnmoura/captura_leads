<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;
use App\Services\LeadService;

class LeadController extends Controller
{
    /** @var LeadService */
    private $leadService;

    public function __construct(LeadService $leadService)
    {
        $this->leadService = $leadService;
    }

    public function create(Request $request)
    {
        $this->leadService->create($request->all());
    }

    public function index()
    {
        $leads = Lead::all();

        return response()->json($leads);
    }

    public function filter(Request $request)
    {
        $request = $request->all();
        $leads = Lead::where('updated_at', '>=', $request['updated_at'])
            ->get();

        return $leads;
    }
}
