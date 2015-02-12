<?php namespace Election;

use Illuminate\Database\Eloquent\Model;
use DB;

class Policy extends Model {
	public $timestamps = false;

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['issue_id', 'party_id', 'description'];

	public function issue()
    {
        return $this->belongsTo('Election\Issue');
    }

	public function party()
    {
        return $this->belongsTo('Election\Party');
    }

    public function scopeCountByParty($query, $policies) {
        
        return $query->whereIn('id', $policies)
            ->select('party_id', DB::raw('count(*) as total'))
            ->groupBy('party_id');
    }

    public function scopeForIssue($query, $issueId)
    {
        return $query->where('issue_id', $issueId);
    }
}
