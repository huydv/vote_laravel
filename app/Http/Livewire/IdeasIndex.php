<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use App\Models\Status;
use App\Models\Vote;
use Livewire\Component;
use Livewire\WithPagination;

class IdeasIndex extends Component
{
    use WithPagination;
    public function render()
    {
        $statuses = Status::all()->pluck('id', 'name');
        $needQueryStatus = request()->status != null && request()->status != 'All';

        return view(
            'livewire.ideas-index',
            [
                'ideas' => Idea::with('user', 'category', 'status')
                            ->when($needQueryStatus, function ($query) use ($statuses) {
                                return $query->where('status_id', $statuses->get(request()->status));
                            })
                            ->addSelect(['voted_by_user' => Vote::select('id')
                                                        ->where('user_id', auth()->id())
                                                        ->whereColumn('idea_id', 'ideas.id')
                                        ])
                            ->withCount('votes')
                            ->orderBy('id', 'desc')
                            ->simplePaginate(Idea::PAGINATION_COUNT)
            ]
        );
    }
}
