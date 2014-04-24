<?php
class DataService extends SoapClient {

  private static $classmap = array(
                                    'SelectDataXml' => 'SelectDataXml',
                                    'SelectDataXmlRequest' => 'SelectDataXmlRequest',
                                    'MBRequest' => 'MBRequest',
                                    'SourceCredentials' => 'SourceCredentials',
                                    'UserCredentials' => 'UserCredentials',
                                    'XMLDetailLevel' => 'XMLDetailLevel',
                                    'SelectDataXmlResponse' => 'SelectDataXmlResponse',
                                    'SelectDataXmlResult' => 'SelectDataXmlResult',
                                    'MBResult' => 'MBResult',
                                    'StatusCode' => 'StatusCode',
                                    'FunctionDataXml' => 'FunctionDataXml',
                                    'FunctionDataXmlRequest' => 'FunctionDataXmlRequest',
                                    'FunctionParam' => 'FunctionParam',
                                    'FunctionDataXmlResponse' => 'FunctionDataXmlResponse',
                                    'SelectDataCSV' => 'SelectDataCSV',
                                    'SelectDataCSVRequest' => 'SelectDataCSVRequest',
                                    'SelectDataCSVResponse' => 'SelectDataCSVResponse',
                                    'SelectDataCSVResult' => 'SelectDataCSVResult',
                                    'FunctionAggregateDataXml' => 'FunctionAggregateDataXml',
                                    'FunctionAggregateDataXmlResponse' => 'FunctionAggregateDataXmlResponse',
                                    'SelectAggregateDataXml' => 'SelectAggregateDataXml',
                                    'SelectAggregateDataXmlRequest' => 'SelectAggregateDataXmlRequest',
                                    'SelectAggregateDataXmlResponse' => 'SelectAggregateDataXmlResponse',
                                    'SelectAggregateDataXmlResult' => 'SelectAggregateDataXmlResult',
                                    'SelectAggregateDataCSV' => 'SelectAggregateDataCSV',
                                    'SelectAggregateDataCSVRequest' => 'SelectAggregateDataCSVRequest',
                                    'SelectAggregateDataCSVResponse' => 'SelectAggregateDataCSVResponse',
                                    'SelectAggregateDataCSVResult' => 'SelectAggregateDataCSVResult',
                                    'Row' => 'Row',
                                    'RecordSet' => 'RecordSet',
                                   );

  public function DataService($wsdl = "https://api.mindbodyonline.com/0_5/DataService.asmx?WSDL", $options = array()) {
    foreach(self::$classmap as $key => $value) {
      if(!isset($options['classmap'][$key])) {
        $options['classmap'][$key] = $value;
      }
    }
    parent::__construct($wsdl, $options);
  }

  /**
   * Issue a select statement to your MB database 
   *
   * @param SelectDataXml $parameters
   * @return SelectDataXmlResponse
   */
  public function SelectDataXml(SelectDataXml $parameters) {
    return $this->__soapCall('SelectDataXml', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param FunctionDataXml $parameters
   * @return FunctionDataXmlResponse
   */
  public function FunctionDataXml(FunctionDataXml $parameters) {
    return $this->__soapCall('FunctionDataXml', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Issue a select statement to your MB database 
   *
   * @param SelectDataCSV $parameters
   * @return SelectDataCSVResponse
   */
  public function SelectDataCSV(SelectDataCSV $parameters) {
    return $this->__soapCall('SelectDataCSV', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param FunctionAggregateDataXml $parameters
   * @return FunctionAggregateDataXmlResponse
   */
  public function FunctionAggregateDataXml(FunctionAggregateDataXml $parameters) {
    return $this->__soapCall('FunctionAggregateDataXml', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Issue a select statement to aggregate data 
   *
   * @param SelectAggregateDataXml $parameters
   * @return SelectAggregateDataXmlResponse
   */
  public function SelectAggregateDataXml(SelectAggregateDataXml $parameters) {
    return $this->__soapCall('SelectAggregateDataXml', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

  /**
   * Issue a select statement to aggregate data 
   *
   * @param SelectAggregateDataCSV $parameters
   * @return SelectAggregateDataCSVResponse
   */
  public function SelectAggregateDataCSV(SelectAggregateDataCSV $parameters) {
    return $this->__soapCall('SelectAggregateDataCSV', array($parameters),       array(
            'uri' => 'http://clients.mindbodyonline.com/api/0_5',
            'soapaction' => ''
           )
      );
  }

}
?>