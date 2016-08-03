<?php
// Generated by https://github.com/bramp/protoc-gen-php// Please include protocolbuffers before this file, for example:
//   require('protocolbuffers.inc.php');
//   require('POGOProtos/Inventory/InventoryItem.php');

namespace POGOProtos\Inventory {

  use Protobuf;
  use ProtobufEnum;
  use ProtobufIO;
  use ProtobufMessage;



  // message POGOProtos.Inventory.InventoryItem.DeletedItem
  final class InventoryItem_DeletedItem extends ProtobufMessage {

    private $_unknown;
    private $pokemonId = 0; // optional fixed64 pokemon_id = 1

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional fixed64 pokemon_id = 1
            if($wire !== 1) {
              throw new \Exception("Incorrect wire format for field $field, expected: 1 got: $wire");
            }
            $tmp = Protobuf::read_uint64($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_unint64 returned false');
            $this->pokemonId = $tmp;

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->pokemonId !== 0) {
        fwrite($fp, "\x09", 1);
        Protobuf::write_uint64($fp, $this->pokemonId);
      }
    }

    public function size() {
      $size = 0;
      if ($this->pokemonId !== 0) {
        $size += 9;
      }
      return $size;
    }

    public function clearPokemonId() { $this->pokemonId = 0; }
    public function getPokemonId() { return $this->pokemonId;}
    public function setPokemonId($value) { $this->pokemonId = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('pokemon_id', $this->pokemonId, 0);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Inventory.InventoryItem.DeletedItem)
  }

  // message POGOProtos.Inventory.InventoryItem
  final class InventoryItem extends ProtobufMessage {

    private $_unknown;
    private $modifiedTimestampMs = 0; // optional int64 modified_timestamp_ms = 1
    private $deletedItem = null; // optional .POGOProtos.Inventory.InventoryItem.DeletedItem deleted_item = 2
    private $inventoryItemData = null; // optional .POGOProtos.Inventory.InventoryItemData inventory_item_data = 3

    public function __construct($in = null, &$limit = PHP_INT_MAX) {
      parent::__construct($in, $limit);
    }

    public function read($fp, &$limit = PHP_INT_MAX) {
      $fp = ProtobufIO::toStream($fp, $limit);
      while(!feof($fp) && $limit > 0) {
        $tag = Protobuf::read_varint($fp, $limit);
        if ($tag === false) break;
        $wire  = $tag & 0x07;
        $field = $tag >> 3;
        switch($field) {
          case 1: // optional int64 modified_timestamp_ms = 1
            if($wire !== 0) {
              throw new \Exception("Incorrect wire format for field $field, expected: 0 got: $wire");
            }
            $tmp = Protobuf::read_signed_varint($fp, $limit);
            if ($tmp === false) throw new \Exception('Protobuf::read_varint returned false');
            if ($tmp < Protobuf::MIN_INT64 || $tmp > Protobuf::MAX_INT64) throw new \Exception('int64 out of range');$this->modifiedTimestampMs = $tmp;

            break;
          case 2: // optional .POGOProtos.Inventory.InventoryItem.DeletedItem deleted_item = 2
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->deletedItem = new \POGOProtos\Inventory\InventoryItem_DeletedItem($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Inventory\InventoryItem_DeletedItem did not read the full length');

            break;
          case 3: // optional .POGOProtos.Inventory.InventoryItemData inventory_item_data = 3
            if($wire !== 2) {
              throw new \Exception("Incorrect wire format for field $field, expected: 2 got: $wire");
            }
            $len = Protobuf::read_varint($fp, $limit);
            if ($len === false) throw new \Exception('Protobuf::read_varint returned false');
            $limit -= $len;
            $this->inventoryItemData = new \POGOProtos\Inventory\InventoryItemData($fp, $len);
            if ($len !== 0) throw new \Exception('new \POGOProtos\Inventory\InventoryItemData did not read the full length');

            break;
          default:
            $limit -= Protobuf::skip_field($fp, $wire);
        }
      }
    }

    public function write($fp) {
      if ($this->modifiedTimestampMs !== 0) {
        fwrite($fp, "\x08", 1);
        Protobuf::write_varint($fp, $this->modifiedTimestampMs);
      }
      if ($this->deletedItem !== null) {
        fwrite($fp, "\x12", 1);
        Protobuf::write_varint($fp, $this->deletedItem->size());
        $this->deletedItem->write($fp);
      }
      if ($this->inventoryItemData !== null) {
        fwrite($fp, "\x1a", 1);
        Protobuf::write_varint($fp, $this->inventoryItemData->size());
        $this->inventoryItemData->write($fp);
      }
    }

    public function size() {
      $size = 0;
      if ($this->modifiedTimestampMs !== 0) {
        $size += 1 + Protobuf::size_varint($this->modifiedTimestampMs);
      }
      if ($this->deletedItem !== null) {
        $l = $this->deletedItem->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      if ($this->inventoryItemData !== null) {
        $l = $this->inventoryItemData->size();
        $size += 1 + Protobuf::size_varint($l) + $l;
      }
      return $size;
    }

    public function clearModifiedTimestampMs() { $this->modifiedTimestampMs = 0; }
    public function getModifiedTimestampMs() { return $this->modifiedTimestampMs;}
    public function setModifiedTimestampMs($value) { $this->modifiedTimestampMs = $value; }

    public function clearDeletedItem() { $this->deletedItem = null; }
    public function getDeletedItem() { return $this->deletedItem;}
    public function setDeletedItem(\POGOProtos\Inventory\InventoryItem_DeletedItem $value) { $this->deletedItem = $value; }

    public function clearInventoryItemData() { $this->inventoryItemData = null; }
    public function getInventoryItemData() { return $this->inventoryItemData;}
    public function setInventoryItemData(\POGOProtos\Inventory\InventoryItemData $value) { $this->inventoryItemData = $value; }

    public function __toString() {
      return ''
           . Protobuf::toString('modified_timestamp_ms', $this->modifiedTimestampMs, 0)
           . Protobuf::toString('deleted_item', $this->deletedItem, null)
           . Protobuf::toString('inventory_item_data', $this->inventoryItemData, null);
    }

    // @@protoc_insertion_point(class_scope:POGOProtos.Inventory.InventoryItem)
  }

}