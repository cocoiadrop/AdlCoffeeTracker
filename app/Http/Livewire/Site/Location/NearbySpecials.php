<?php

namespace App\Http\Livewire\Site\Location;

use App\Models\LocalityData\Locality;
use Livewire\Component;

class NearbySpecials extends Component
{
    public $localitySearch = '';

    public function render()
    {
        //See if there is a user location (postcode) in the session
        if (session()->has('postcode') && session('postcode') != null) {
            return 'Postcode';
        } else {
            //Find localities in search term
            $localities = Locality::where('name', 'like', '%'.$this->localitySearch.'%')->orWhere('postcode', 'like', '%'.$this->localitySearch.'%')->get();

            //If search term is nothing or too short (50 won't work for example)
            if (strlen($this->localitySearch) <= 2) {
                $localities = [];
            }

            //Return component vie
            return view('livewire.site.location.nearby-specials.request-postcode', compact('localities'));
        }
    }
}
