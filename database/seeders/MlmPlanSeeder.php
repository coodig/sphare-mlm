<?php

namespace Database\Seeders;

use App\Models\MlmPlan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MlmPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MlmPlan::insert([
            [
                'name' => 'Binary Plan',
                'slug' => 'binary',
                'description' => 'Members build two legs (left and right). Commissions are typically based on matching volume in the weaker leg.'
            ],
            [
                'name' => 'Unilevel Plan',
                'slug' => 'unilevel',
                'description' => 'Members can sponsor unlimited direct downlines on their first level. Commissions are paid based on level depth.'
            ],
            [
                'name' => 'Matrix Plan',
                'slug' => 'matrix',
                'description' => 'A plan with a fixed width and depth structure (e.g., 3x5 matrix). Members are placed in predetermined spots.'
            ],
            [
                'name' => 'Board Plan (Matrix Cycle)',
                'slug' => 'board',
                'description' => 'Members fill a "board" (a small matrix). When the board is full, the member cycles out, earns commissions, and moves to a new board.'
            ],
            [
                'name' => 'Generation Plan',
                'slug' => 'generation',
                'description' => 'Pays commissions based on "generations" of leaders within the downline, rather than just fixed levels.'
            ],
            [
                'name' => 'Stair Step Breakaway Plan',
                'slug' => 'stair-step-breakaway',
                'description' => 'Members climb "steps" (ranks) based on volume. When they reach a top rank, they "break away" from their upline, who then earns overrides.'
            ],
            [
                'name' => 'Hybrid Plan',
                'slug' => 'hybrid',
                'description' => 'Combines elements from two or more different plan types, often Binary and Unilevel.'
            ],
             [
                'name' => 'Australian Binary Plan',
                'slug' => 'australian-binary',
                'description' => 'Similar to Binary, but often involves three legs instead of two, or variations in commission rules.'
            ],
            // Add any other specific plans you might need
        ]);
    }
}
