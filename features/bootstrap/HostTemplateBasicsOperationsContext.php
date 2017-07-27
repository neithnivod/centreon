<?php

use Centreon\Test\Behat\CentreonContext;
use Centreon\Test\Behat\Configuration\HostTemplateConfigurationPage;
use Centreon\Test\Behat\Configuration\HostTemplateConfigurationListingPage;
use Centreon\Test\Behat\Configuration\ContactConfigurationPage;
use Centreon\Test\Behat\Configuration\ContactGroupsConfigurationPage;
use Centreon\Test\Behat\Configuration\ContactCategoryConfigurationPage;
use Centreon\Test\Behat\Configuration\HostConfigurationPage;
use Centreon\Test\Behat\Configuration\HostCategoryConfigurationPage;
use Centreon\Test\Behat\Configuration\ServiceTemplateConfigurationPage;

class HostTemplateBasicsOperationsContext extends CentreonContext
{
    protected $currentPage;

    protected $contact = array(
        'name' => 'contactName',
        'alias' => 'contactAlias',
        'email' => 'contac@localhost'
    );

    protected $contactGroup = array(
        'name' => 'contactGroupName',
        'alias' => 'contactGroupAlias'
    );

    protected $host = array(
        'name' => 'hostName',
        'alias' => 'hostAlias',
        'address' => 'host@localhost'
    );

    protected $hostCategory1 = array(
        'name' => 'hostCategory1Name',
        'alias' => 'hostCategory1Alias',
        'severity' => 1,
        'severity_level' => 2,
        'severity_icon' => '       centreon (png)'
    );

    protected $hostCategory2 = array(
        'name' => 'hostCategory2Name',
        'alias' => 'hostCategory2Alias',
        'severity' => 1,
        'severity_level' => 13,
        'severity_icon' => '       centreon (png)'
    );

    protected $hostTemplate2 = array(
        'name' => 'hostTemplate2Name',
        'alias' => 'hostTemplate2Alias'
    );

    protected $serviceTemplate1 = array(
        'description' => 'serviceTemplate1Description',
        'alias' => 'serviceTemplate1Alias'
    );

    protected $serviceTemplate2 = array(
        'description' => 'serviceTemplate2Description',
        'alias' => 'serviceTemplate2Alias'
    );

    protected $initialProperties = array(
        'name' => 'hostTemplateName',
        'alias' => 'hostTemplateAlias',
        'address' => 'hostTemplate@localhost',
        'snmp_community' => 'snmp',
        'snmp_version' => '2c',
        'location' => 'Europe/Paris',
        'templates' => array(
            'generic-host'
        ),
        'check_command' => 'check_http',
        'command_arguments' => 'hostTemplateCommandArgument',
        'macros' => array(
            'HOSTTEMPLATEMACRONAME' => '22'
        ),
        'check_period' => 'workhours',
        'max_check_attempts' => 34,
        'normal_check_interval' => 5,
        'retry_check_interval' => 10,
        'active_checks_enabled' => 2,
        'passive_checks_enabled' => 0,
        'notifications_enabled' => 1,
        'contact_additive_inheritance' => 1,
        'contacts' => 'Guest',
        'contact_group_additive_inheritance' => 0,
        'contact_groups' => 'Supervisors',
        'notify_on_down' => 1,
        'notify_on_unreachable' => 1,
        'notify_on_recovery' => 1,
        'notify_on_flapping' => 1,
        'notify_on_downtime_scheduled' => 1,
        'notify_on_none' => 0,
        'notification_interval' => 17,
        'notification_period' => 'none',
        'first_notification_delay' => 4,
        'recovery_notification_delay' => 3,
        'service_templates' => 'serviceTemplate1Description',
        'parent_host_categories' => 'hostCategory2Name',
        'obsess_over_host' => 2,
        'acknowledgement_timeout' => 2,
        'check_freshness' => 0,
        'freshness_threshold' => 34,
        'flap_detection_enabled' => 1,
        'low_flap_threshold' => 67,
        'high_flap_threshold' => 85,
        'retain_status_information' => 2,
        'retain_non_status_information' => 0,
        'stalking_option_on_up' => 1,
        'stalking_option_on_down' => 0,
        'stalking_option_on_unreachable' => 1,
        'event_handler_enabled' => 2,
        'event_handler' => 'check_https',
        'event_handler_arguments' => 'event_handler_arguments',
        'url' => 'hostTemplateChangeUrl',
        'notes' => 'hostTemplateChangeNotes',
        'action_url' => 'hostTemplateChangeActionUrl',
        'icon' => '       centreon (png)',
        'alt_icon' => 'hostTemplateChangeIcon',
        'status_map_image' => '',
        '2d_coords' => '15,84',
        '3d_coords' => '15,84,76',
        'severity_level' => 'hostCategory1Name (2)',
        'enabled' => 1,
        'comments' => 'hostTemplateChangeComments'
    );

    protected $duplicatedProperties = array(
        'name' => 'hostTemplateName_1',
        'alias' => 'hostTemplateAlias',
        'address' => 'hostTemplate@localhost',
        'snmp_community' => 'snmp',
        'snmp_version' => '2c',
        'location' => 'Europe/Paris',
        'templates' => array(
            'generic-host'
        ),
        'check_command' => 'check_http',
        'command_arguments' => 'hostTemplateCommandArgument',
        'macros' => array(
            'HOSTTEMPLATEMACRONAME' => '22'
        ),
        'check_period' => 'workhours',
        'max_check_attempts' => 34,
        'normal_check_interval' => 5,
        'retry_check_interval' => 10,
        'active_checks_enabled' => 2,
        'passive_checks_enabled' => 0,
        'notifications_enabled' => 1,
        'contact_additive_inheritance' => 1,
        'contacts' => 'Guest',
        'contact_group_additive_inheritance' => 0,
        'contact_groups' => 'Supervisors',
        'notify_on_down' => 1,
        'notify_on_unreachable' => 1,
        'notify_on_recovery' => 1,
        'notify_on_flapping' => 1,
        'notify_on_downtime_scheduled' => 1,
        'notify_on_none' => 0,
        'notification_interval' => 17,
        'notification_period' => 'none',
        'first_notification_delay' => 4,
        'recovery_notification_delay' => 3,
        'service_templates' => 'serviceTemplate1Description',
        'parent_host_categories' => array(
            'hostCategory1Name',
            'hostCategory2Name'
        ),
        'obsess_over_host' => 2,
        'acknowledgement_timeout' => 2,
        'check_freshness' => 0,
        'freshness_threshold' => 34,
        'flap_detection_enabled' => 1,
        'low_flap_threshold' => 67,
        'high_flap_threshold' => 85,
        'retain_status_information' => 2,
        'retain_non_status_information' => 0,
        'stalking_option_on_up' => 1,
        'stalking_option_on_down' => 0,
        'stalking_option_on_unreachable' => 1,
        'event_handler_enabled' => 2,
        'event_handler' => 'check_https',
        'event_handler_arguments' => 'event_handler_arguments',
        'url' => 'hostTemplateChangeUrl',
        'notes' => 'hostTemplateChangeNotes',
        'action_url' => 'hostTemplateChangeActionUrl',
        'icon' => '       centreon (png)',
        'alt_icon' => 'hostTemplateChangeIcon',
        'status_map_image' => '',
        '2d_coords' => '15,84',
        '3d_coords' => '15,84,76',
        'severity_level' => 'hostCategory1Name (2)',
        'enabled' => 1,
        'comments' => 'hostTemplateChangeComments'
    );

    protected $update = array(
        'name' => 'hostTemplateNameChanged',
        'alias' => 'hostTemplateAliasChanged',
        'address' => 'hostTemplate@localhostChanged',
        'snmp_community' => 'snmpChanged',
        'snmp_version' => '3',
        'location' => 'Europe/Paris',
        'templates' => array(
            'hostTemplate2Name'
        ),
        'check_command' => 'check_https',
        'command_arguments' => 'hostTemplateCommandArgumentChanged',
        'macros' => array(
            'HOSTTEMPLATEMACRONAMECHANGED' => '11'
        ),
        'check_period' => 'nonworkhours',
        'max_check_attempts' => 34,
        'normal_check_interval' => 9,
        'retry_check_interval' => 4,
        'active_checks_enabled' => 1,
        'passive_checks_enabled' => 1,
        'notifications_enabled' => 0,
        'contact_additive_inheritance' => 0,
        'contacts' => 'contactName',
        'contact_group_additive_inheritance' => 1,
        'contact_groups' => 'contactGroupName',
        'notify_on_down' => 0,
        'notify_on_unreachable' => 0,
        'notify_on_recovery' => 0,
        'notify_on_flapping' => 0,
        'notify_on_downtime_scheduled' => 0,
        'notify_on_none' => 0,
        'notification_interval' => 49,
        'notification_period' => 'workhours',
        'first_notification_delay' => 7,
        'recovery_notification_delay' => 8,
        'service_templates' => 'serviceTemplate2Description',
        'parent_host_categories' => 'hostCategory1Name',
        'obsess_over_host' => 1,
        'acknowledgement_timeout' => 0,
        'check_freshness' => 1,
        'freshness_threshold' => 15,
        'flap_detection_enabled' => 0,
        'low_flap_threshold' => 25,
        'high_flap_threshold' => 34,
        'retain_status_information' => 1,
        'retain_non_status_information' => 1,
        'stalking_option_on_up' => 0,
        'stalking_option_on_down' => 1,
        'stalking_option_on_unreachable' => 0,
        'event_handler_enabled' => 1,
        'event_handler' => 'check_http',
        'event_handler_arguments' => 'event_handler_argumentsChanged',
        'url' => 'hostTemplateChangeUrlChanged',
        'notes' => 'hostTemplateChangeNotesChanged',
        'action_url' => 'hostTemplateChangeActionUrlChanged',
        'icon' => '',
        'alt_icon' => 'hostTemplateChangeIconChanged',
        'status_map_image' => '       centreon (png)',
        '2d_coords' => '48,29',
        '3d_coords' => '09,25,27',
        'severity_level' => 'hostCategory2Name (13)',
        'enabled' => 1,
        'comments' => 'hostTemplateChangeCommentsChanged'
    );

    protected $updatedProperties = array(
        'name' => 'hostTemplateNameChanged',
        'alias' => 'hostTemplateAliasChanged',
        'address' => 'hostTemplate@localhostChanged',
        'snmp_community' => 'snmpChanged',
        'snmp_version' => '3',
        'location' => 'Europe/Paris',
        'templates' => array(
            'hostTemplate2Name'
        ),
        'check_command' => 'check_https',
        'command_arguments' => 'hostTemplateCommandArgumentChanged',
        'macros' => array(
            'HOSTTEMPLATEMACRONAME' => '22',
            'HOSTTEMPLATEMACRONAMECHANGED' => '11'
        ),
        'check_period' => 'nonworkhours',
        'max_check_attempts' => 34,
        'normal_check_interval' => 9,
        'retry_check_interval' => 4,
        'active_checks_enabled' => 1,
        'passive_checks_enabled' => 1,
        'notifications_enabled' => 0,
        'contact_additive_inheritance' => 0,
        'contacts' => 'contactName',
        'contact_group_additive_inheritance' => 1,
        'contact_groups' => 'contactGroupName',
        'notify_on_down' => 0,
        'notify_on_unreachable' => 0,
        'notify_on_recovery' => 0,
        'notify_on_flapping' => 0,
        'notify_on_downtime_scheduled' => 0,
        'notify_on_none' => 0,
        'notification_interval' => 49,
        'notification_period' => 'workhours',
        'first_notification_delay' => 7,
        'recovery_notification_delay' => 8,
        'service_templates' => 'serviceTemplate2Description',
        'parent_host_categories' => array(
            'hostCategory1Name',
            'hostCategory2Name'
        ),
        'obsess_over_host' => 1,
        'acknowledgement_timeout' => 0,
        'check_freshness' => 1,
        'freshness_threshold' => 15,
        'flap_detection_enabled' => 0,
        'low_flap_threshold' => 25,
        'high_flap_threshold' => 34,
        'retain_status_information' => 1,
        'retain_non_status_information' => 1,
        'stalking_option_on_up' => 0,
        'stalking_option_on_down' => 1,
        'stalking_option_on_unreachable' => 0,
        'event_handler_enabled' => 1,
        'event_handler' => 'check_http',
        'event_handler_arguments' => 'event_handler_argumentsChanged',
        'url' => 'hostTemplateChangeUrlChanged',
        'notes' => 'hostTemplateChangeNotesChanged',
        'action_url' => 'hostTemplateChangeActionUrlChanged',
        'icon' => '',
        'alt_icon' => 'hostTemplateChangeIconChanged',
        'status_map_image' => '       centreon (png)',
        '2d_coords' => '48,29',
        '3d_coords' => '09,25,27',
        'severity_level' => 'hostCategory2Name (13)',
        'enabled' => 1,
        'comments' => 'hostTemplateChangeCommentsChanged'
    );

    /**
     * @Given a host template is configured
     */
    public function aHostTemplateIsConfigured()
    {
        $this->currentPage = new ContactConfigurationPage($this);
        $this->currentPage->setProperties($this->contact);
        $this->currentPage->save();
        $this->currentPage = new ContactGroupsConfigurationPage($this);
        $this->currentPage->setProperties($this->contactGroup);
        $this->currentPage->save();
        $this->currentPage = new HostCategoryConfigurationPage($this);
        $this->currentPage->setProperties($this->hostCategory1);
        $this->currentPage->save();
        $this->currentPage = new HostCategoryConfigurationPage($this);
        $this->currentPage->setProperties($this->hostCategory2);
        $this->currentPage->save();
        $this->currentPage = new HostTemplateConfigurationPage($this);
        $this->currentPage->setProperties($this->hostTemplate2);
        $this->currentPage->save();
        $this->currentPage = new ServiceTemplateConfigurationPage($this);
        $this->currentPage->setProperties($this->serviceTemplate1);
        $this->currentPage->save();
        $this->currentPage = new ServiceTemplateConfigurationPage($this);
        $this->currentPage->setProperties($this->serviceTemplate2);
        $this->currentPage->save();
        $this->currentPage = new HostTemplateConfigurationPage($this);
        $this->currentPage->setProperties($this->initialProperties);
        $this->currentPage->save();
    }

    /**
     * @When I change the properties of a host template
     */
    public function iChangeThePropertiesOfAHostTemplate()
    {
        $this->currentPage = new HostTemplateConfigurationListingPage($this);
        $this->currentPage = $this->currentPage->inspect($this->initialProperties['name']);
        $this->currentPage->setProperties($this->update);
        $this->currentPage->save();
    }

    /**
     * @Then the properties are updated
     */
    public function thePropertiesAreUpdated()
    {
        $this->tableau = array();
        try {
            $this->spin(
                function ($context) {
                    $this->currentPage = new HostTemplateConfigurationListingPage($this);
                    $this->currentPage = $this->currentPage->inspect($this->updatedProperties['name']);
                    $object = $this->currentPage->getProperties();
                    foreach ($this->updatedProperties as $key => $value) {
                        if ($value != $object[$key]) {
                            if (is_array($value)) {
                                $value = implode(' ', $value);
                            }
                            if ($value != $object[$key]) {
                                $this->tableau[] = $key;
                            }
                        }
                    }
                    return count($this->tableau) == 0;
                },
                "Some properties are not being updated : ",
                5
            );
        } catch (\Exception $e) {
            $this->tableau = array_unique($this->tableau);
            throw new \Exception("Some properties are not being updated : " . implode(',', $this->tableau));
        }
    }

    /**
     * @When I duplicate a host template
     */
    public function iDuplicateAHostTemplate()
    {
        $this->currentPage = new HostTemplateConfigurationListingPage($this);
        $object = $this->currentPage->getEntry($this->initialProperties['name']);
        $this->assertFind('css', 'input[type="checkbox"][name="select[' . $object['id'] . ']"]')->check();
        $this->setConfirmBox(true);
        $this->selectInList('select[name="o1"]', 'Duplicate');
    }

    /**
     * @Then the new host template has the same properties
     */
    public function theNewHostTemplateHasTheSameProperties()
    {
        $this->tableau = array();
        try {
            $this->spin(
                function ($context) {
                    $this->currentPage = new HostTemplateConfigurationListingPage($this);
                    $this->currentPage = $this->currentPage->inspect($this->duplicatedProperties['name']);
                    $object = $this->currentPage->getProperties();
                    foreach ($this->duplicatedProperties as $key => $value) {
                        if ($value != $object[$key]) {
                            if (is_array($value)) {
                                $value = implode(' ', $value);
                            }
                            if ($value != $object[$key]) {
                                $this->tableau[] = $key;
                            }
                        }
                    }
                    return count($this->tableau) == 0;
                },
                "Some properties are not being updated : ",
                5
            );
        } catch (\Exception $e) {
            $this->tableau = array_unique($this->tableau);
            throw new \Exception("Some properties are not being updated : " . implode(',', $this->tableau));
        }
    }

    /**
     * @When I delete a host template
     */
    public function iDeleteAHostTemplate()
    {
        $this->currentPage = new HostTemplateConfigurationListingPage($this);
        $object = $this->currentPage->getEntry($this->initialProperties['name']);
        $this->assertFind('css', 'input[type="checkbox"][name="select[' . $object['id'] . ']"]')->check();
        $this->setConfirmBox(true);
        $this->selectInList('select[name="o1"]', 'Delete');
    }

    /**
     * @Then the deleted host is not displayed in the host list
     */
    public function theDeletedHostIsNotDisplayedInTheHostList()
    {
        $this->spin(
            function ($context) {
                $this->currentPage = new HostTemplateConfigurationListingPage($this);
                $object = $this->currentPage->getEntries();
                $bool = true;
                foreach ($object as $value) {
                    $bool = $bool && $value['name'] != $this->initialProperties['name'];
                }
                return $bool;
            },
            "The host category is not being deleted.",
            5
        );
    }
}
