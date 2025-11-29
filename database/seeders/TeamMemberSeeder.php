<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamMember;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            // Management & Administration
            ['name' => 'Ruby Alcantara', 'image' => '/images/ruby.png', 'location' => 'Nairobi, Kenya', 'role' => 'Co-Founder', 'focus' => 'Gender-Lens Investing', 'group' => 'management'],
            ['name' => 'Carolyn Burns', 'image' => '/images/carolyn.png', 'location' => 'Nairobi, Kenya & London', 'role' => 'Co-Founder', 'focus' => 'Climate Finance & Gender', 'group' => 'management'],
            ['name' => 'Aarti Shah', 'image' => '/images/aarti.png', 'location' => 'Lusaka, Zambia', 'role' => 'Co-Founder', 'focus' => 'Gender-Lens Investing', 'group' => 'management'],
            ['name' => 'Elizabeth Chege', 'image' => '/images/elizabeth.png', 'location' => 'Nairobi, Kenya', 'role' => 'Head of Admin', 'group' => 'management'],
            ['name' => 'Bhavana Khondar', 'image' => '/images/bhavana.png', 'location' => 'Nairobi, Kenya', 'role' => 'Finance Manager', 'group' => 'management'],

            // Consultants
            ['name' => "Moses Mwai Wang'ang'a", 'image' => '/images/moses.png', 'location' => 'Nairobi, Kenya', 'role' => 'Impact Associate', 'group' => 'consultants'],
            ['name' => 'Daizy Tlailana', 'image' => '/images/daizy.png', 'location' => 'South Africa', 'role' => 'Marketing & Business Development Analyst | Internship Coordinator', 'group' => 'consultants'],
            ['name' => 'Samuella Nyanutse', 'image' => '/images/samuella.png', 'location' => 'Togo', 'role' => 'Marketing Analyst', 'group' => 'consultants'],
            ['name' => 'Red Bunny', 'image' => '/images/bunny.png', 'location' => 'Nairobi, Kenya', 'role' => 'Communications Consultant', 'group' => 'consultants'],
            ['name' => 'Katie Carlson Akuno', 'image' => '/images/katie.png', 'location' => 'Location TBD', 'role' => 'Sr. Consultant, GLI', 'group' => 'consultants'],
            ['name' => 'Dr. Maira Bholla', 'image' => '/images/bholla.png', 'location' => 'Location TBD', 'role' => 'Sr. Consultant, Healthcare', 'group' => 'consultants'],
            ['name' => 'Tanvir Natt', 'image' => '/images/natt.png', 'location' => 'Location TBD', 'role' => 'Sr. Consultant', 'group' => 'consultants'],
            ['name' => 'Gloria Nalugwa', 'image' => '/images/gloria.png', 'location' => 'Uganda', 'role' => 'Consultant', 'group' => 'consultants'],
            ['name' => 'Dawit Mulugeta', 'image' => '/images/dawit.png', 'location' => 'Ethiopia', 'role' => 'Consultant', 'group' => 'consultants'],
            ['name' => 'Stephen Magige', 'image' => '/images/magige.png', 'location' => 'Tanzania', 'role' => 'Consultant', 'group' => 'consultants'],
            ['name' => 'Diana Matheka', 'image' => '/images/matheka.png', 'location' => 'Kenya', 'role' => 'Consultant', 'group' => 'consultants'],

            // Interns
            ['name' => 'Francis Mwakina', 'image' => '/images/francis.png', 'location' => 'Kenya', 'role' => 'Business Development & Investor Relations Intern', 'group' => 'interns'],
            ['name' => 'Elvis Mugisha', 'image' => '/images/elvis.png', 'location' => 'Rwanda', 'role' => 'Marketing & Branding Intern', 'group' => 'interns'],

            // Advisors
            ['name' => 'Kyambi Kavali', 'image' => '/images/kyambi.png', 'location' => 'Location TBD', 'role' => 'Engagement Lead', 'group' => 'advisors'],
            ['name' => 'Alfred Mabika', 'image' => '/images/alfred.png', 'location' => 'Location TBD', 'role' => 'Agriculture Consultant', 'group' => 'advisors'],
        ];

        foreach ($members as $member) {
            TeamMember::updateOrCreate(
                ['name' => $member['name']], // unique key to prevent duplicates
                $member
            );
        }
    }
}
