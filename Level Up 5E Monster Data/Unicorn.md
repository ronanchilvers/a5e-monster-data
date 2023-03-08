---
statblock: true
name: Unicorn
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Celestial
cr: 5
ac: 14
hp: 85
hit_dice: '9d10 + 36'
speed: '80 ft.'
stats:
    - 20
    - 18
    - 18
    - 16
    - 20
    - 20
damage_immunities: poison
condition_immunities: 'charmed, paralyzed, poisoned'
senses: 'darkvision 60 ft., passive Perception 15'
languages: 'Celestial, Elvish, Sylvan, telepathy 60 ft.'
traits:
    0: { name: Good, desc: 'The unicorn radiates a Good aura.' }
    1: { name: 'Innate Spellcasting', desc: "The unicorn's innate spellcasting ability is Charisma (spell save DC 16). It can innately cast the following spells, requiring no material components:" }
    traits: ['At will: animal messenger, detect evil and good, druidcraft, pass without trace, scrying (locations within its domain only)', '1/day: calm emotions, dispel evil and good, teleport (between locations within its domain only)']
    2: { name: 'Magic Resistance', desc: 'The unicorn has advantage on saving throws against spells and magical effects.' }
actions:
    - { name: Multiattack, desc: 'The unicorn attacks once with its hooves and once with its horn.' }
    - { name: Hooves, desc: 'Melee Weapon Attack: +8 to hit, reach 5 ft., one target. Hit: 9 (1d8 + 5) bludgeoning damage.' }
    - { name: Horn, desc: 'Melee Weapon Attack: +8 to hit, reach 5 ft., one target. Hit: 9 (1d8 + 5) piercing damage plus 10 (3d6) radiant damage. If the target is a creature and the unicorn moves at least 20 feet straight towards the target before the attack, the target takes an extra 9 (2d8) bludgeoning damage and makes a DC 16 Strength saving throw, falling prone on a failure.' }
    - { name: 'Grant Boon (3/Day)', desc: 'The unicorn touches a willing creature, including itself, with its horn and grants one of the following boons:' }
    - { name: 'Healing: The creature magically regains 21 (6d6) hit points', desc: 'It is cured of all diseases, and poisons affecting it are neutralized.' }
    - { name: 'Luck: During the next 24 hours, the creature can roll a d12 and add the result to one ability check, attack roll, or saving throw after seeing the result', desc: '' }
    - { name: "Protection: A glowing mote of light orbits the creature's head", desc: 'The mote lasts 24 hours. When the creature fails a saving throw, it can use its reaction to expend the mote and succeed on the saving throw.' }
    - { name: 'Resolution: The creature is immune to being charmed or frightened for 24 hours', desc: '' }
combat:
    - { name: 'The unicorn grants a boon, such as Luck or Protection, to itself or an ally before battle', desc: 'It charges into melee combat and fights with its hooves and horn. When it or an ally is seriously injured, it grants a Healing boon. If brought to the brink of defeat within its domain, it uses Teleport to escape with allies to safety.' }

---
```statblock
monster: Unicorn
```
