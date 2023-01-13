---
statblock: true
name: 'Revilock - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 2
ac: 12
hp: 39
hit_dice: '6d8 + 12'
speed: '30 ft.'
stats:
    - 14
    - 14
    - 14
    - 14
    - 10
    - 8
condition_immunities: blinded
skillsaves:
    athletics: 4
    engineering: 4
    perception: 2
    stealth: 4
senses: 'blindsight 30 ft., or 10 ft. while deafened (blind beyond this radius), passive Perception 14'
languages: 'Undercommon; telepathy 60ft.'
traits:
    0: { name: Camouflage, desc: 'The grimlock has advantage on Stealth checks made to hide in rocky terrain.' }
    1: { name: 'Keen Hearing and Smell', desc: 'The grimlock has advantage on Perception checks that rely on hearing or smell.' }
    2: { name: 'Psionic Spellcasting', desc: "The revilock's spellcasting ability is Intelligence (spell save DC 12). It can innately cast the following spells, requiring no components:" }
    traits: ['At will: mage armor, mage hand, minor illusion (sound only)', '3/day each: gust of wind, invisibility']
actions:
    - { name: 'Spiked Club', desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 4 (1d4 + 2) bludgeoning damage plus 2 (1d4) piercing damage.' }
    - { name: Throttle, desc: "Melee Weapon Attack: +4 to hit, reach 5 ft., one creature. Hit: 4 (1d4 + 2) bludgeoning damage, and the target is grappled (escape DC 12) and can't breathe. Until this grapple ends, the grimlock can't use any attack other than throttle and only against the grappled target, and it makes this attack with advantage." }
    - { name: Sling, desc: 'Ranged Weapon Attack: +4 to hit, range 30/120 ft., one target. Hit: 4 (1d4 + 2) bludgeoning damage.' }
reactions:
    reactions: ['The revilock has the following additional reactions, which can only target creatures the revilock can sense with its blindsense:']
    0: { name: 'Psychic Camouflage', desc: "When the revilock would be targeted by an attack or spell, the attacker makes a DC 12 Intelligence saving throw. On a failure, the attacker momentarily forgets the revilock's existence. The attacker must choose a new target or a different action that doesn't target the revilock. Creatures with telepathy or an Intelligence of 3 or less are immune to this effect." }
    1: { name: 'Shared Pain', desc: 'When the revilock takes damage from an attack or spell, the attacker or spellcaster makes a DC 12 Intelligence saving throw, taking 10 (3d6) psychic damage on a failure. Creatures with telepathy make the saving throw with disadvantage.' }
combat:
    - { name: 'Grimlocks stealthily approach a group of foes, throttling and dragging them off one at a time', desc: 'In a pitched battle, grimlocks are adept at determining which creatures are moving hesitantly (blinded by darkness or other effects) and attacking those targets. After two rounds of face-to-face combat, grimlocks retreat, tracking their foes from a distance and attacking again when surprise is on their side.' }

---
```statblock
monster: Revilock - A5E
```
