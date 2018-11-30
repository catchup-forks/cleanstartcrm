<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('relations', function(Blueprint $table) {
			$table->foreign('companyid', 'fk_relations_companies')->references('id')->on('companies')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('employees', function(Blueprint $table) {
			$table->foreign('companyid', 'fk_employees_companies')->references('id')->on('companies')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('departments', function(Blueprint $table) {
			$table->foreign('managerid')->references('id')->on('employees')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('department_staff', function(Blueprint $table) {
			$table->foreign('departmentid')->references('id')->on('departments')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('department_staff', function(Blueprint $table) {
			$table->foreign('teamid')->references('id')->on('teams')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('department_staff', function(Blueprint $table) {
			$table->foreign('employeeid')->references('id')->on('employees')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('suspects', function(Blueprint $table) {
			$table->foreign('companyid')->references('id')->on('companies')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('suspects', function(Blueprint $table) {
			$table->foreign('relationid')->references('id')->on('relations')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('prospects', function(Blueprint $table) {
			$table->foreign('companyid')->references('id')->on('companies')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('prospects', function(Blueprint $table) {
			$table->foreign('relationid')->references('id')->on('relations')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('leads', function(Blueprint $table) {
			$table->foreign('companyid')->references('id')->on('companies')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('leads', function(Blueprint $table) {
			$table->foreign('prospectid')->references('id')->on('prospects')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('customers', function(Blueprint $table) {
			$table->foreign('companyid')->references('id')->on('companies')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('relations_emailaddresses', function(Blueprint $table) {
			$table->foreign('companyid')->references('id')->on('companies')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('relations_emailaddresses', function(Blueprint $table) {
			$table->foreign('relationid')->references('id')->on('relations')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('cronlog', function(Blueprint $table) {
			$table->foreign('cronid')->references('id')->on('cron')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('mail__queue', function(Blueprint $table) {
			$table->foreign('departmentid')->references('id')->on('departments')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('mail__signatures', function(Blueprint $table) {
			$table->foreign('emailqueueid')->references('id')->on('mail__queue')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('settings', function(Blueprint $table) {
			$table->foreign('settinggroupid')->references('id')->on('settings__groups')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('sla__holidaylinks', function(Blueprint $table) {
			$table->foreign('slaholidayid')->references('id')->on('sla__holidays')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tags', function(Blueprint $table) {
			$table->foreign('staffid')->references('id')->on('employees')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tags__links', function(Blueprint $table) {
			$table->foreign('tagid')->references('id')->on('tags')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tags__links', function(Blueprint $table) {
			$table->foreign('staffid')->references('id')->on('employees')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->foreign('customerid')->references('id')->on('customers')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->foreign('projectid')->references('id')->on('projects')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->foreign('departmentid')->references('id')->on('departments')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->foreign('tickettypeid')->references('id')->on('tickets__types')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->foreign('ticketstatusid')->references('id')->on('tickets__statuses')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->foreign('priorityid')->references('id')->on('tickets__priorities')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets__threads', function(Blueprint $table) {
			$table->foreign('ticketid')->references('id')->on('tickets')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets__threads', function(Blueprint $table) {
			$table->foreign('staffid')->references('id')->on('employees')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets__statuses', function(Blueprint $table) {
			$table->foreign('departmentid')->references('id')->on('departments')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets__types', function(Blueprint $table) {
			$table->foreign('departmentid')->references('id')->on('departments')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets__timetracks', function(Blueprint $table) {
			$table->foreign('ticketid')->references('id')->on('tickets')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets__timetracks', function(Blueprint $table) {
			$table->foreign('relationid')->references('id')->on('relations')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets__timetracks', function(Blueprint $table) {
			$table->foreign('workerstaffid')->references('id')->on('employees')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets__timetracks', function(Blueprint $table) {
			$table->foreign('creatorstaffid')->references('id')->on('employees')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tickets__timetracks', function(Blueprint $table) {
			$table->foreign('editorstaffid')->references('id')->on('employees')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('teams', function(Blueprint $table) {
			$table->foreign('departmentid')->references('id')->on('departments')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('projects', function(Blueprint $table) {
			$table->foreign('customerid')->references('id')->on('customers')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('invoices', function(Blueprint $table) {
			$table->foreign('companyid')->references('id')->on('companies')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('invoices', function(Blueprint $table) {
			$table->foreign('projectid')->references('id')->on('projects')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('invoices', function(Blueprint $table) {
			$table->foreign('customerid')->references('id')->on('customers')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('calendar__events', function(Blueprint $table) {
			$table->foreign('relationid')->references('id')->on('relations')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('relations', function(Blueprint $table) {
			$table->dropForeign('relations_companyid_foreign');
		});
		Schema::table('employees', function(Blueprint $table) {
			$table->dropForeign('employees_companyid_foreign');
		});
		Schema::table('departments', function(Blueprint $table) {
			$table->dropForeign('departments_managerid_foreign');
		});
		Schema::table('department_staff', function(Blueprint $table) {
			$table->dropForeign('department_staff_departmentid_foreign');
		});
		Schema::table('department_staff', function(Blueprint $table) {
			$table->dropForeign('department_staff_teamid_foreign');
		});
		Schema::table('department_staff', function(Blueprint $table) {
			$table->dropForeign('department_staff_employeeid_foreign');
		});
		Schema::table('suspects', function(Blueprint $table) {
			$table->dropForeign('suspects_companyid_foreign');
		});
		Schema::table('suspects', function(Blueprint $table) {
			$table->dropForeign('suspects_relationid_foreign');
		});
		Schema::table('prospects', function(Blueprint $table) {
			$table->dropForeign('prospects_companyid_foreign');
		});
		Schema::table('prospects', function(Blueprint $table) {
			$table->dropForeign('prospects_relationid_foreign');
		});
		Schema::table('leads', function(Blueprint $table) {
			$table->dropForeign('leads_companyid_foreign');
		});
		Schema::table('leads', function(Blueprint $table) {
			$table->dropForeign('leads_prospectid_foreign');
		});
		Schema::table('customers', function(Blueprint $table) {
			$table->dropForeign('customers_companyid_foreign');
		});
		Schema::table('relations_emailaddresses', function(Blueprint $table) {
			$table->dropForeign('relations_emailaddresses_companyid_foreign');
		});
		Schema::table('relations_emailaddresses', function(Blueprint $table) {
			$table->dropForeign('relations_emailaddresses_relationid_foreign');
		});
		Schema::table('cronlog', function(Blueprint $table) {
			$table->dropForeign('cronlog_cronid_foreign');
		});
		Schema::table('mail__queue', function(Blueprint $table) {
			$table->dropForeign('mail__queue_departmentid_foreign');
		});
		Schema::table('mail__signatures', function(Blueprint $table) {
			$table->dropForeign('mail__signatures_emailqueueid_foreign');
		});
		Schema::table('settings', function(Blueprint $table) {
			$table->dropForeign('settings_settinggroupid_foreign');
		});
		Schema::table('sla__holidaylinks', function(Blueprint $table) {
			$table->dropForeign('sla__holidaylinks_slaholidayid_foreign');
		});
		Schema::table('tags', function(Blueprint $table) {
			$table->dropForeign('tags_staffid_foreign');
		});
		Schema::table('tags__links', function(Blueprint $table) {
			$table->dropForeign('tags__links_tagid_foreign');
		});
		Schema::table('tags__links', function(Blueprint $table) {
			$table->dropForeign('tags__links_staffid_foreign');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->dropForeign('tickets_customerid_foreign');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->dropForeign('tickets_projectid_foreign');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->dropForeign('tickets_departmentid_foreign');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->dropForeign('tickets_tickettypeid_foreign');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->dropForeign('tickets_ticketstatusid_foreign');
		});
		Schema::table('tickets', function(Blueprint $table) {
			$table->dropForeign('tickets_priorityid_foreign');
		});
		Schema::table('tickets__threads', function(Blueprint $table) {
			$table->dropForeign('tickets__threads_ticketid_foreign');
		});
		Schema::table('tickets__threads', function(Blueprint $table) {
			$table->dropForeign('tickets__threads_staffid_foreign');
		});
		Schema::table('tickets__statuses', function(Blueprint $table) {
			$table->dropForeign('tickets__statuses_departmentid_foreign');
		});
		Schema::table('tickets__types', function(Blueprint $table) {
			$table->dropForeign('tickets__types_departmentid_foreign');
		});
		Schema::table('tickets__timetracks', function(Blueprint $table) {
			$table->dropForeign('tickets__timetracks_ticketid_foreign');
		});
		Schema::table('tickets__timetracks', function(Blueprint $table) {
			$table->dropForeign('tickets__timetracks_relationid_foreign');
		});
		Schema::table('tickets__timetracks', function(Blueprint $table) {
			$table->dropForeign('tickets__timetracks_workerstaffid_foreign');
		});
		Schema::table('tickets__timetracks', function(Blueprint $table) {
			$table->dropForeign('tickets__timetracks_creatorstaffid_foreign');
		});
		Schema::table('tickets__timetracks', function(Blueprint $table) {
			$table->dropForeign('tickets__timetracks_editorstaffid_foreign');
		});
		Schema::table('teams', function(Blueprint $table) {
			$table->dropForeign('teams_departmentid_foreign');
		});
		Schema::table('projects', function(Blueprint $table) {
			$table->dropForeign('projects_customerid_foreign');
		});
		Schema::table('invoices', function(Blueprint $table) {
			$table->dropForeign('invoices_companyid_foreign');
		});
		Schema::table('invoices', function(Blueprint $table) {
			$table->dropForeign('invoices_projectid_foreign');
		});
		Schema::table('invoices', function(Blueprint $table) {
			$table->dropForeign('invoices_customerid_foreign');
		});
		Schema::table('calendar__events', function(Blueprint $table) {
			$table->dropForeign('calendar__events_relationid_foreign');
		});
	}
}