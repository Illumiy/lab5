<?php

Class DOMNode
{
/* Properties */
public  $nodeName ;
public $nodeValue ;
public  $nodeType ;
public  $parentNode ;
public  $childNodes ;
public $firstChild ;
public $lastChild ;
public $previousSibling ;
public $nextSibling ;
public $attributes ;
public $ownerDocument ;
public $namespaceURI ;
public $prefix ;
public $localName ;
public $baseURI ;
public $textContent ;
/* Methods */
public appendChild ( DOMNode $newnode ) : DOMNode
public C14N ([ bool $exclusive [, bool $with_comments [, array $xpath [, array $ns_prefixes ]]]] ) : string
public C14NFile ( string $uri [, bool $exclusive = FALSE [, bool $with_comments = FALSE [, array $xpath [, array $ns_prefixes ]]]] ) : int
public cloneNode ([ bool $deep ] ) : DOMNode
public getLineNo ( void ) : int
public getNodePath ( void ) : string
public hasAttributes ( void ) : bool
public hasChildNodes ( void ) : bool
public insertBefore ( DOMNode $newnode [, DOMNode $refnode ] ) : DOMNode
public isDefaultNamespace ( string $namespaceURI ) : bool
public isSameNode ( DOMNode $node ) : bool
public isSupported ( string $feature , string $version ) : bool
public lookupNamespaceUri ( string $prefix ) : string
public lookupPrefix ( string $namespaceURI ) : string
public normalize ( void ) : void
public removeChild ( DOMNode $oldnode ) : DOMNode
public replaceChild ( DOMNode $newnode , DOMNode $oldnode ) : DOMNode
}
?>