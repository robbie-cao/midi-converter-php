# MIDI Converter

Convert MIDI to others by PHP using `midi.class.php`.

## MIDI Class

`midi.class.php` is a class for reading, writing, analyzing, modifying, creating, downloading and playing (embedding) standard MIDI files (*.mid, *.rmi) of type 0 or 1.

MIDI songs are internally represented as lists of tracks, where each track is a list of messages, and each message is a string. The message string format is the same as the one used by the command line tools [MF2T/T2MF](ftp://ftp.cs.ruu.nl/pub/MIDI/PROGRAMS/MSDOS/mf2t.zip) created by Piet van Oostrum.

The class provides methods to generate and manipulate MIDI data and to import and export binary midi files (SMF, *.mid), text in the MF2T/T2MF format and [MIDI XML](http://www.recordare.com/dtds/midixml.html).

## [Online Tools](http://flashmusicgames.com/midi/)

- <a href="http://flashmusicgames.com/midi/mid2txt.php"><b>midi</b> to txt converter</a> - Binary <b>midi</b> file to text (MF2T/T2MF format) conversion
- <a href="http://flashmusicgames.com/midi/txt2mid.php">txt to <b>midi</b> converter</a> - Text (MF2T/T2MF format) to binary <b>midi</b> file conversion
- <a href="http://flashmusicgames.com/midi/mid2xml.php"><b>midi</b> to xml converter</a> - Binary <b>midi</b> file to <b>midi</b> XML conversion
- <a href="http://flashmusicgames.com/midi/xml2mid.php">xml to <b>midi</b>  converter</a> - <b>midi</b> XML to binary <b>midi</b> file conversion
- <a href="http://flashmusicgames.com/midi/mid2rttl.php"><b>midi</b> to rttl converter</a> - Simple binary <b>midi</b> file to RTTL ringtone conversion
- <a href="http://flashmusicgames.com/midi/rttl2mid.php">rttl to <b>midi</b> converter</a> - RTTL ringtone to binary <b>midi</b> file conversion

## Usage

```
php midi2xml.php xxx.mid [> xxx.xml]
php midi2txt.php xxx.mid [> xxx.txt]
```

## Reference

- <a href="http://www.midi.org/">MIDI Manufacturers Association (MMA)</a>
- <a href="http://www.midi.org/dtds/midi_xml.shtml">MMA's MIDI XML Specifications</a>
- <a href="http://www.recordare.com/default.asp">Recordare</a>
- <a href="http://www.recordare.com/dtds/midixml.html">Standard MIDI File DTD: MIDI XML</a>
- <a href="ftp://ftp.cs.ruu.nl/pub/MIDI/PROGRAMS/MSDOS/mf2t.zip">MF2T/T2MF</a>
- <a href="http://www.midiox.com/">MIDI-OX</a>
- <a href="http://www.beatnik.com/">Beatnik</a>
