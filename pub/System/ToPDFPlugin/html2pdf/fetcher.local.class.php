<?php

class FetcherLocalFile extends Fetcher {
  var $_content;


  function get_local_file_path($path) {
  	// TODO: do this MORE carefully
    $path =  str_replace("http://localhost","",$path);

	return $path;
  }


  function FetcherLocalFile($file = null) {
    $this->_content = null;

    if( $domain != "" )
        $this->domainUrl = $domain;
    if($file != null)
	    $this->_content = file_get_contents($this->get_local_file_path($file));

  }

  function get_data($dummy1) {
    if($this->_content == null || $dummy1 != "" )
    	$this->_content = file_get_contents($this->get_local_file_path($dummy1));

    if($this->_content == null )
        return null;
    return new FetchedDataFile($this->_content, $dummy1);
  }

  function get_base_url() {
    return '';
  }

  function error_message() {
    return '';
  }
}

?>
