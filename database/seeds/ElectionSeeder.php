<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Election\Issue;
use Election\Party;
use Election\Policy;

class ElectionSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('PartiesTableSeeder');
		$this->command->info('Parties table seeded!');
		$this->call('IssuesTableSeeder');
		$this->command->info('Issues table seeded!');
		$this->call('PoliciesTableSeeder');
		$this->command->info('Policies table seeded!');
	}
}

class IssuesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('issues')->truncate();

        // Issue::create(['title' => 'Economy']);
        // Issue::create(['title' => 'Infrastructure']);
        // Issue::create(['title' => 'Environment']);
        // Issue::create(['title' => 'Employment']);
        // Issue::create(['title' => 'Family']);
        // Issue::create(['title' => 'Social']);
        // Issue::create(['title' => 'Housing']);
        // Issue::create(['title' => 'Education']);
        // Issue::create(['title' => 'Health']);
        // Issue::create(['title' => 'Crime']);
        // Issue::create(['title' => 'UK']); //Scottish and Welsh powers?
        // Issue::create(['title' => 'International']); //sercurity, hackers, commerical tax

		Issue::create(['title' => 'Economy']);
		Issue::create(['title' => 'Immigration']);
		Issue::create(['title' => 'Health']);
		Issue::create(['title' => 'Employment']);
		Issue::create(['title' => 'Security']);
		Issue::create(['title' => 'Education']);
		Issue::create(['title' => 'Housing']);
		Issue::create(['title' => 'Law and Order']);
		Issue::create(['title' => 'Benefits/Poverty']);
	}
}

class PartiesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('parties')->truncate();

		Party::create(['name' => 'Conservatives']);
		Party::create(['name' => 'Labour']);
		Party::create(['name' => 'Liberal Democrats']);
		Party::create(['name' => 'Scottish National Party']);
		Party::create(['name' => 'UK Independence Party']);
		Party::create(['name' => 'Greens']);
		Party::create(['name' => 'Plaid Cymru']);
	}
}

class PoliciesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('policies')->truncate();

		//http://www.bbc.co.uk/news/uk-politics-29642613
		Policy::create(['issue_id' => 1, 'party_id' => 1, 'description' => 'SEradicate the deficit by 2018 and secure an overal budget surplus by 2019-20. Achieve this by spending cuts, not tax rises, while raising NHS spending. An income tax cut for 30 million people by 2020. Tax would start to kick in at £12,500 a year, instead of £10,500. This will cost £5.6bn. The higher tax rate, 40%, would start at £50,000 instead of £41,900, again by 2020, at a cost of £1.6bn. This will be paid for through £25bn in additional spending cuts and economic growth.']);
		Policy::create(['issue_id' => 2, 'party_id' => 1, 'description' => 'David Cameron wants to make migrants wait four years before they can claim certain benefits, such as tax credits, Universal Credit, or get access to social housing. He wants to stop migrants from claiming child benefit for dependents living outside the UK, and remove those that have failed to find work after six months. Mr Cameron has promised to put reform of EU free movement rules at the heart of his renegotiation of Britain\'s relationship with the EU. He has ruled out a temporary cap on migrant numbers or an "emergency brake" on EU freedom of movement rules - ideas both mooted in recent months, saying this would be less "effective" than reducing the incentives for people to come to the UK. The party has a continuing goal to bring net immigration down to below 100,000 people a year (it currently stands at 243,000).']);
		Policy::create(['issue_id' => 3, 'party_id' => 1, 'description' => 'Chancellor George Osborne says he will put an extra £2bn into frontline health services across the UK, which he described as a "down payment" on a plan drawn up by NHS bosses calling for an extra £8bn a year above inflation by 2020. In England, everyone would be able to see a GP seven days a week by 2020. Recruit 5,000 more doctors.']);
		Policy::create(['issue_id' => 4, 'party_id' => 1, 'description' => 'Create three million apprenticeships to be paid for by benefit cuts.']);
		Policy::create(['issue_id' => 5, 'party_id' => 1, 'description' => 'Hold a referendum on Britain\'s membership of the EU by 2017, after negotiating the return of some powers from Brussels. Protect foreign aid budget. Replace Trident.']);
		Policy::create(['issue_id' => 6, 'party_id' => 1, 'description' => 'Continue with free school and academy programme. Opposed to giving votes to 16 and 17-year-olds for UK-wide general elections and local elections in England.']);
		Policy::create(['issue_id' => 7, 'party_id' => 1, 'description' => 'First-time buyers in England under the age of 40 would be able to buy a house at 20% below the market rate, with 100,000 starter homes to be built for them.']);
		Policy::create(['issue_id' => 8, 'party_id' => 1, 'description' => 'Banning orders to outlaw groups that incite hatred or cause fear. Extremism Disruption Orders (EXDOs) to stop "disruptive" individuals from speaking in public or holding a position of authority. A new law setting out victims\' rights. New laws to make it easier for the police to collect information about internet activity by suspected criminals. A Communications Data Act, requiring companies to start storing certain types of information. Replace Human Rights Act with Bill of Rights to give UK courts and Parliament the "final say".']);
		Policy::create(['issue_id' => 9, 'party_id' => 1, 'description' => 'No increase in benefits for working-age people for two years to save £3bn. Affects those receiving jobseekers\' allowance, income support, tax credits and child benefit. Cut maximum amount a household can claim each year from £26,000 to £23,000. Withdraw Jobseeker\'s Allowance from young people after six months unless they take part in "community projects". And 18 to 21-year-olds wouldn\'t be entitled to housing benefit. Ban on zero-hours contracts which stop people getting work elsewhere. Raise the personal allowance - the point at which you start paying income tax - to £11,000 in April 2016 and then to £12,500 by 2020, which means that if you work on minimum wage for 30 hours you will pay no income tax.']);
		Policy::create(['issue_id' => 10, 'party_id' => 1, 'description' => 'Save the rich']);
		Policy::create(['issue_id' => 11, 'party_id' => 1, 'description' => 'Save the rich']);
		Policy::create(['issue_id' => 12, 'party_id' => 1, 'description' => 'Save the rich']);

		Policy::create(['issue_id' => 1, 'party_id' => 2, 'description' => 'Get the current budget into surplus and the national debt falling "as soon as possible in the next parliament". No additional borrowing for new spending. Reintroduce the 50p top rate of income tax for earnings over £150,000. Cut income tax for 24 million people by bringing back the 10p rate, paid for by scrapping the Married Couples\' Tax Allowance. Bring in a "mansion tax" on properties worth over £2m, to raise £1.2bn. A tax on bankers\' bonuses. A 5% pay cut for every government minister. Push for UK overseas territories to be put on an international blacklist if they refuse to co-operate with a drive against tax avoidance.']);
		Policy::create(['issue_id' => 2, 'party_id' => 2, 'description' => '"Stronger" border controls to tackle illegal immigration with "proper" entry and exit checks. "Smarter" targets to reduce low-skilled migration but ensure university students and high-skilled workers are not deterred. Employment agencies who only recruit abroad will be outlawed while the fines for employing illegal immigrants will be increased.']);
		Policy::create(['issue_id' => 3, 'party_id' => 2, 'description' => 'Shadow chancellor Ed Balls said Labour would commit an extra £2.5bn a year above Mr Osborne\'s plan. The money will come from three sources - a new "mansion" tax, clamping down on tax avoidance by big corporations and a new tax on tobacco companies. Patients in England would get a GP appointment within 48 hours and would not have to wait longer than a week for cancer tests and results. Scrap the Health and Social Care Act and end "creeping privatisation" of the NHS. Integrate health and social care services into a system of "whole-person care". Give greater priority to mental health services. Replace the Cancer Drugs Fund in England when it runs out in 2016 with a £330m fund to improve access to innovative cancer drugs, surgery and radiotherapy. Recruit 5,000 more healthcare workers to help patients stay in their homes and introduce new safety checks to identify people at risk of hospitalisation. Prioritise child mental health by increasing the proportion of the mental health budget spent on children.']);
		Policy::create(['issue_id' => 4, 'party_id' => 2, 'description' => 'Guarantee a job for under 25s unemployed for over a year and adults unemployed for more than two years. As many young people to go on an apprenticeship as currently go to university by 2025. Create a million new high technology, green jobs by 2025. Ban "exploitative" zero hour contracts.']);
		Policy::create(['issue_id' => 5, 'party_id' => 2, 'description' => 'Push for reform of European Union and prevent Britain from "sleepwalking" towards exit. Commit in law to holding a Strategic Defence and Security Review every 5 years. Outlaw discrimination and abuse of Armed Forces personnel.']);
		Policy::create(['issue_id' => 6, 'party_id' => 2, 'description' => 'All teachers would have to be qualified. Parents of primary school children would be guaranteed childcare from 8am to 6pm. The amount of free childcare for three and four year olds would be increased from 15 to 25 hours a week. Compulsory sex and relationship education in all schools. Refuse to grant business rate relief to independent schools unless they can show a "meaningful impact" on state schools through a new School Partnership Standard, for example by lending teaching staff or assisting in university admissions procedures. Committed to extending the franchise to 16 and 17-year-olds in elections across the UK. Double the number of Sure Start childcare places to more than 118,000.']);
		Policy::create(['issue_id' => 7, 'party_id' => 2, 'description' => 'Build 200,000 houses a year by 2020, including new towns and garden cities. Cap rent increases in the private sector and scrap letting fees to estate agents to give a "fairer deal" to tenants. Greater powers for councils to reduce the number of empty homes.']);
		Policy::create(['issue_id' => 8, 'party_id' => 2, 'description' => 'Scrap Police and Crime Commissioners, which the party says would save £50m. Local residents to be given a say in deciding crime fighting priorities and have access to police planning meetings. Bring back control orders to combat extremism and revive Prevent strategy. Ban convicted child sex offenders from working with children. More money for frontline policing to prevent cuts in officer numbers. End £17m "subsidy" for cheap gun licences. New commissioner on domestic and sexual abuse and cash for a national network of refuges']);
		Policy::create(['issue_id' => 9, 'party_id' => 2, 'description' => 'Freeze energy prices until 2017. Increase in the minimum wage from £6.50-an-hour to £8-an-hour by 2020. Rises in child benefit capped at 1% for the first two years of the next parliament. Winter fuel allowance would be withdrawn from the wealthiest pensioners. Repeal what the government calls the spare room subsidy, dubbed the "bedroom tax" by Labour. A million interest-free loans to help people insulate their homes. Rail fares would be capped. Double the amount of paid paternity leave available to new fathers from two to four weeks, and increase statutory paternity pay to £260 a week.']);
		Policy::create(['issue_id' => 10, 'party_id' => 2, 'description' => 'Save the poor']);
		Policy::create(['issue_id' => 11, 'party_id' => 2, 'description' => 'Save the poor']);
		Policy::create(['issue_id' => 12, 'party_id' => 2, 'description' => 'Save the poor']);

		Policy::create(['issue_id' => 1, 'party_id' => 3, 'description' => 'Raise the personal allowance - the point at which you start paying income tax - to £11,000 in April 2016 and then to £12,500 by 2020. "Strict new fiscal rules" to ensure the deficit has gone by April 2018, with the wealthy contributing the most. The Lib Dems invented the "mansion tax" but in contrast to Labour have set out how it would operate - along similar lines to council tax bands. There are also Lib Dem plans to increase capital gains tax - paid on profits from second homes or shares - from 28% to 35%.']);
		Policy::create(['issue_id' => 2, 'party_id' => 3, 'description' => 'Reintroduce exit checks at borders, so the government can identify people who are overstaying their visa. Will require all new claimants for Jobseekers Allowance to have their English language skills assessed, with JSA then being conditional on attending language courses for those whose English is poor. Ensure that EU migrants have to "earn" their entitlement to benefits.']);
		Policy::create(['issue_id' => 3, 'party_id' => 3, 'description' => 'An extra £1bn for the NHS every year, to be funded by - amongst other things - making higher earners pay more tax on their shares. Half of this will go towards mental health. Ensure that spending on the NHS rises in line with growth in the economy. People who need therapy for conditions such as depression will be guaranteed treatment within 18 weeks. For young patients experiencing psychosis for the first time treatment will be provided within two weeks of being referred by a GP. This is all going to happen from April, with more mental health targets to follow if the Lib Dems return to government. Wants a cross-party review of the future of NHS funding.']);
		Policy::create(['issue_id' => 4, 'party_id' => 3, 'description' => 'An extra £1 an hour for the lowest paid apprentices. Campaign to create a million more jobs.']);
		Policy::create(['issue_id' => 5, 'party_id' => 3, 'description' => 'Campaign to reduce the number of Trident nuclear submarines. Push for greater European Union efficiency.']);
		Policy::create(['issue_id' => 6, 'party_id' => 3, 'description' => 'Protect the education budget from cuts. Guarantee qualified teachers and a core curriculum set by independent experts, as well as compulsory sex education, in all state schools including academies and free schools. More money for disadvantaged school children and free childcare for all two year olds. A two-thirds discount on all local bus fares for young people aged 16-21. Supports lowering the voting age to 16 in all UK elections.']);
		Policy::create(['issue_id' => 7, 'party_id' => 3, 'description' => 'Build 300,000 houses a year, with up to five new garden cities in Cambridgeshire, Bedfordshire, Buckinghamshire and Oxfordshire.']);
		Policy::create(['issue_id' => 8, 'party_id' => 3, 'description' => 'End prison sentences for personal drugs possession. Users would instead receive non-custodial sentences and appropriate medical treatment. Replace Police and Crime Commissioners with Police Boards made up of councillors from across the force area. Pass a Digital Bill of Rights to help protect people from unwarranted intrusion and give them more control over their own data. Make \'stop and search\' more accountable by making the wearing of body cameras by officers compulsory in some areas and for firearms officers.']);
		Policy::create(['issue_id' => 9, 'party_id' => 3, 'description' => 'Raise the personal allowance - the point at which you start paying income tax - to £11,000 in April 2016 and then to £12,500 by 2020 (the Conservatives are promising the same thing). Nick Clegg has said he would not accept Conservative plans to freeze working-age benefits without taxing the rich too. He hasn\'t said he would block welfare cuts altogether. Withdraw eligibility for the Winter Fuel Payment and free TV Licence from pensioners on the 40% rate of income tax. A "yellow card" system to deal with benefit claimants breaking the rules, rather than imposing sanctions without warning.']);
		Policy::create(['issue_id' => 10, 'party_id' => 3, 'description' => 'Sit on the fence']);
		Policy::create(['issue_id' => 11, 'party_id' => 3, 'description' => 'Sit on the fence']);
		Policy::create(['issue_id' => 12, 'party_id' => 3, 'description' => 'Sit on the fence']);

		Policy::create(['issue_id' => 1, 'party_id' => 4, 'description' => 'Oppose UK plans in the Infrastructure Bill which will allow oil and gas drilling and hydraulic fracturing beneath people\'s homes without consent. Invest in offshore wind farming. Support an international bank tax and limits to industry bonuses.']);
		Policy::create(['issue_id' => 2, 'party_id' => 4, 'description' => 'Allow the devolved government to have control over immigration to Scotland, and introduce a Canadian-style earned citizenship system to attract highly-skilled immigrants.']);
		Policy::create(['issue_id' => 3, 'party_id' => 4, 'description' => 'Reduce the number of senior managers in the NHS by 25% over the next parliament. Streamline the work of health boards. Real terms increases in year-on-year NHS spending.']);
		Policy::create(['issue_id' => 4, 'party_id' => 4, 'description' => 'Introduce gender quotas on public boards. Living wage "a central priority" in all Scottish government contracts. Continue the \'small business bonus\'.']);
		Policy::create(['issue_id' => 5, 'party_id' => 4, 'description' => 'Oppose nuclear weapons and push for removal of Trident submarines from Scotland. In 2010, proposed a Scottish Centre for Reconciliation and Conflict Resolution, to promote peaceful alternatives to armed conflict. Maintain 0.7% commitment to foreign aid. Enhanced role for Scotland within the UK in Europe, particularly in fisheries policy.']);
		Policy::create(['issue_id' => 6, 'party_id' => 4, 'description' => 'Guaranteed free 30 hours of childcare a week for three and four-year-olds in Scotland, up from 16 hours. Maintain lack of tuition fees at Scottish universities, and offer financial support in grants and loans to students. Continue to build and refurbish schools. Lower voting age to 16 in all UK elections.']);
		Policy::create(['issue_id' => 7, 'party_id' => 4, 'description' => 'Oppose the so-called "bedroom tax". Provide support from the Scottish government to contribute to the building of new homes.']);
		Policy::create(['issue_id' => 8, 'party_id' => 4, 'description' => 'Support the European Arrest Warrant. Co-operate with other countries on organised crime and terrorism.']);
		Policy::create(['issue_id' => 9, 'party_id' => 4, 'description' => 'Oppose cuts to in-work benefits. Support moves to extend paternity leave. Introduce a maximum combined withdrawal rate for benefits and reforms to employment support allowance and cold weather payments. Protect policies such as concessionary travel for older Scots.']);
		Policy::create(['issue_id' => 10, 'party_id' => 4, 'description' => 'Free Scotland']);
		Policy::create(['issue_id' => 11, 'party_id' => 4, 'description' => 'Free Scotland']);
		Policy::create(['issue_id' => 12, 'party_id' => 4, 'description' => 'Free Scotland']);

		Policy::create(['issue_id' => 1, 'party_id' => 5, 'description' => 'Increase the personal allowance to the level of full-time minimum wage earnings, about £13,500, by 2020. Abolish inheritance tax. Introduce a 35% income tax rate between £42,285 and £55,000, at which point the 40% rate becomes payable. Set up a Treasury Commission to design a turnover tax on large businesses. Cut foreign aid budget by £9bn a year. Scrap HS2. Save £8bn a year in membership fees by leaving the EU. Lower the VAT rate charged on restorations to listed buildings.']);
		Policy::create(['issue_id' => 2, 'party_id' => 5, 'description' => 'Introduce an Australian-style points policy, used to select migrants with the skills and attributes needed to work in the country - covering people from inside and outside the EU. Bring net immigration down to 50,000 people a year. Priority lanes for UK passport holders. Increase UK border staff by 2,500. Tougher English language tests for migrants seeking permanent residence. Opt out of the Dublin treaty to allow the UK to return asylum seekers to other EU countries without considering their claim. Anyone who currently has the legal right to live, work, or study in the UK would not face deportation in the event of the country\'s withdrawal from the EU.']);
		Policy::create(['issue_id' => 3, 'party_id' => 5, 'description' => 'An extra £3bn per year in NHS funding paid for by quitting the EU and through "middle management" cuts. Keep NHS free at the point of delivery. Stop any further use of PFI, and encourage local authorities to buy out their PFI contracts early where it is affordable to do so. Ensure all visitors and migrants who have been here for fewer than five years have NHS-approved medical insurance as a condition of entry to UK, with £200m of the £2bn saved to be spent on ending hospital parking charges in England. Bring back state-enrolled nurses and return powers to matrons. Monitor and Care Quality Commission to be replaced with elected county health boards. Stop spending £90m a year on gastric band and breast enhancement operations.']);
		Policy::create(['issue_id' => 4, 'party_id' => 5, 'description' => 'Allow firms to offer jobs to British workers first "without the fear of being sued for discrimination".']);
		Policy::create(['issue_id' => 5, 'party_id' => 5, 'description' => 'Leave the European Union. Remove the passports of any person who has gone to fight for a terrorist organisation and deport anyone who has committed a terrorist act. Cut foreign aid budget by £9bn. Create a Veterans Department to look after the interests of ex-service men and women.']);
		Policy::create(['issue_id' => 6, 'party_id' => 5, 'description' => 'SMore grammar schools. Scrap sex education for children aged under seven. Scrap tuition fees for students from poorer backgrounds who take degree courses in the sciences, technology, maths or engineering. Greater emphasis on vocational education with new Apprenticeship Qualification Option. School governing boards must be made up of at least 30% parents of children at the school. Allow universities to charge same amount for EU students as non-EU students.']);
		Policy::create(['issue_id' => 7, 'party_id' => 5, 'description' => 'Protect greenbelt land by incentivising the building of affordable homes on brownfield sites. Establish a UK Brownfield Agency to hand out grants, tax breaks and low interest loans. Major planning decisions to be ratified by local referendum.']);
		Policy::create(['issue_id' => 8, 'party_id' => 5, 'description' => 'Repeal Human Rights Act and replace it with UK Bill of Rights. Withdraw from European Arrest Warrant. No votes for prisoners. Those responsible for criminal damage forced to carry out unpaid work in area where it was committed. Those jailed for offences affecting their community should be banned from returning to live in the area, as a condition of their release. "Complete overhaul" of police taking into account "best practice from other countries".']);
		Policy::create(['issue_id' => 9, 'party_id' => 5, 'description' => 'Only pay child benefit for the first two children for new claimants. Increase the Carers\' Allowance to the same level as Jobseekers\' Allowance (JSA) and pay a higher rate of JSA if you\'ve been in work and already made tax and National Insurance contributions. Prevent anyone taking up permanent residence in Britain unless they\'re able to support themselves and any dependents they bring with them for at least five years and stop them receiving benefits. Stop paying child benefit for children who don\'t live in Britain. Scrap what UKIP calls the "detested bedroom tax". Boost "credit unions".']);
		Policy::create(['issue_id' => 10, 'party_id' => 5, 'description' => 'Stop immigration']);
		Policy::create(['issue_id' => 11, 'party_id' => 5, 'description' => 'Stop immigration']);
		Policy::create(['issue_id' => 12, 'party_id' => 5, 'description' => 'Stop immigration']);

		Policy::create(['issue_id' => 1, 'party_id' => 6, 'description' => 'People earning more than £100,000 a year would pay 50% income tax. Wealth tax of 1% to 2% on people worth £3m or more. Renationalise the railways and energy companies. Scrap HS2. Allow councils to impose extra business rates on out-of-town supermarkets to fund small local businesses. Crackdown on tax avoidance by multinationals. Allow "the current dependence on economic growth to cease, and allow zero or negative growth to be feasible without individual hardship". Commit Britain to a "zero carbon" future. Cut rail and bus fares by an average of 10%. Enforce a cap on bankers\' bonuses.']);
		Policy::create(['issue_id' => 2, 'party_id' => 6, 'description' => 'Progressively reduce UK immigration controls. Migrants illegally in the UK for over five years will be allowed to remain unless they pose a serious danger to public safety. More legal rights for asylum seekers.']);
		Policy::create(['issue_id' => 3, 'party_id' => 6, 'description' => 'Funding to be diverted away from centralised facilities towards community healthcare, illness prevention and health promotion. Stop privatisation. Abolish prescription charges. Dedicated NHS Tax to go direct to the health service. Ban proactive recruitment of non-British NHS staff from overseas. A complete ban on the promotion of tobacco and alcohol products, including sponsorship.']);
		Policy::create(['issue_id' => 4, 'party_id' => 6, 'description' => 'A national energy conservation scheme to create thousands of new jobs. The party wants to create "sustainable jobs" and promotes more local production of food and goods.']);
		Policy::create(['issue_id' => 5, 'party_id' => 6, 'description' => 'Referendum on Britain\'s EU membership. Want reform of EU to hand powers back to local communities. Boost overseas aid to 1% of GDP within 10 years. Scrap Britain\'s nuclear weapons. Take the UK out of NATO unilaterally. End the so-called "special relationship" between the UK and the US. Stop EU-US free trade deal TTIP.']);
		Policy::create(['issue_id' => 6, 'party_id' => 6, 'description' => 'End performance related pay for teachers. Replace Ofsted with an independent National Council for Educational Excellence. Bring Free Schools and Academies into local authority control. Ensure all teachers are properly qualified, abolish SATS and Year 1 phonics tests. Raise school starting age to six if parents want it. Scrap National Curriculum. Allow 16 and 17-year-olds to vote in all UK elections. Scrap university tuition fees.']);
		Policy::create(['issue_id' => 7, 'party_id' => 6, 'description' => 'Abolish right to buy. Give councils the power to borrow money to build houses or buy them on the open market. Introduce a rent cap to prevent exploitation by private landlords. Set up a living rent commission, to work out how to bring rents back in line with incomes. Home owners unable to meet mortgage payments or under threat of repossession would get right to transfer ownership to the council, at less than market value, and pay rent as council tenants. Buil 500,000 social rented homes by 2020, paid for by scrapping the buy-to-let mortgage interest tax allowance.']);
		Policy::create(['issue_id' => 8, 'party_id' => 6, 'description' => 'Decriminalise cannabis and axe prison sentences for possession of other drugs. Decriminalise prostitution. Ensure terror suspects have the same legal rights as those accused of more conventional criminal activities.']);
		Policy::create(['issue_id' => 9, 'party_id' => 6, 'description' => 'The party backs a Citizen\'s Income, a fixed amount to be paid to every individual, whether they are in work or not, to be funded by higher taxes on the better off and green levies. But in the short-term it would increase the minimum wage to £10 by 2020. Ban zero hours contracts. Axe the "bedroom tax". Abolish the work capability assessment and restore the level of the former disability living allowance. Scrap the government\'s welfare cap, which limits the maximum amount a household can claim annually to £26,000 a year.']);
		Policy::create(['issue_id' => 10, 'party_id' => 6, 'description' => 'Save the planet']);
		Policy::create(['issue_id' => 11, 'party_id' => 6, 'description' => 'Save the planet']);
		Policy::create(['issue_id' => 12, 'party_id' => 6, 'description' => 'Save the planet']);

		Policy::create(['issue_id' => 1, 'party_id' => 7, 'description' => 'Build a Green Skills Construction College, specialising in green energy. Establish a publicly-owned energy company. Establish a publicly-owned Bank of Wales business investment bank. Enforce a living wage. Give devolved nations an equal say in institutions that affect everyone\'s lives, such as the Bank of England.']);
		Policy::create(['issue_id' => 2, 'party_id' => 7, 'description' => 'Oppose a points-based system. Support the right of asylum seekers to work in Wales while they wait for status decisions to be made. Lobby the Westminster government to ensure that they shut "detention" centres.']);
		Policy::create(['issue_id' => 3, 'party_id' => 7, 'description' => 'Recruit 1,000 extra doctors to the Welsh NHS over two terms of a Plaid government. Offer financial incentives for recruiting doctors to areas and specialisms where there are, or are predicted to be, shortages. Encourage innovation and attract more research funding, in part by increasing research and development funding as government finance allows. Improve training for postgraduate doctors and stop them being used to "plug gaps" in staff rotas. More recruitment from within the EU to fill vacancies and using international doctors to staff the NHS while a new generation of Welsh doctors are trained.']);
		Policy::create(['issue_id' => 4, 'party_id' => 7, 'description' => 'Provide rates relief for small businesses. Increase the number and value of contracts from Welsh public bodies that go to firms within Wales.']);
		Policy::create(['issue_id' => 5, 'party_id' => 7, 'description' => 'Honour commitment of 0.7% of budget used for foreign aid. Campaign for cancellation of developing countries\' debts. Support the Fair Trade movement. Support the \'Tobin\' or \'Robin hood\' tax as a means of encouraging more responsibility and stability in the global markets. Reform the IMF and World Bank in order to improve regulation and accountability. Continue membership of the EU, but campaign for democratic reform. Support minority nations and minority language speakers around the world. Pass a Military Wellbeing Act to promote and safeguard the physical and mental health and wellbeing of military personnel.']);
		Policy::create(['issue_id' => 6, 'party_id' => 7, 'description' => 'Introduce a compulsory modern foreign language GCSE in secondary schools and the teaching of modern foreign languages in primary schools. Look at ways to strengthen the teaching of Welsh history and culture. Oppose foundation schools, academies and free schools. Look at moving from a per-pupil funding mechanism to a funding model based on the catchment area. Will not support any further increases in tuition fees for higher education students, and will seek the abolition of tuition fees as and when public finances allow. Supports lowering the voting age to 16 for elections to the Welsh Assembly and the UK Parliament.']);
		Policy::create(['issue_id' => 7, 'party_id' => 7, 'description' => 'Oppose the \'bedroom tax\'. Introduce stricter rent controls. Insist on written tenancy agreements.']);
		Policy::create(['issue_id' => 8, 'party_id' => 7, 'description' => 'Creation of a Welsh Youth Justice Board. Replace ASBOs with a system of restorative justice. Encourage a debate on future of drug enforcement laws.']);
		Policy::create(['issue_id' => 9, 'party_id' => 7, 'description' => 'Move away from complex and expensive means testing for child-related benefits. Continue to campaign for the introduction of a living pension during the period of the next parliament for those aged 80 and over.']);
		Policy::create(['issue_id' => 10, 'party_id' => 7, 'description' => 'Free Wales']);
		Policy::create(['issue_id' => 11, 'party_id' => 7, 'description' => 'Free Wales']);
		Policy::create(['issue_id' => 12, 'party_id' => 7, 'description' => 'Free Wales']);
	}
}