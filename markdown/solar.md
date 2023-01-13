---
statblock: true
name: 'Solar - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Celestial
cr: 21
ac: 21
hp: 319
hit_dice: '22d10 + 198'
speed: '50 ft., fly 150 ft.'
stats:
    - 28
    - 22
    - 28
    - 22
    - 30
    - 30
damage_resistances: 'radiant; damage from nonmagical weapons'
damage_immunities: 'necrotic, poison'
condition_immunities: 'charmed, exhaustion, frightened, poisoned'
saves:
    wisdom: 0
    charisma: 17
skillsaves:
    athletics: 16
    history: 16
    insight: 17
    perception: 17
    religion: 17
senses: 'truesight 120 ft., Passive Perception 27'
languages: 'all, telepathy 120 ft.'
traits:
    0: { name: 'Champion of Truth', desc: 'The solar automatically detects lies. Additionally, it cannot lie.' }
    1: { name: 'Innate Spellcasting', desc: "The solar's spellcasting ability is Charisma (spell save DC 25). The solar can innately cast the following spells, requiring no material components:" }
    traits: ['1/day each: commune, control weather, resurrection']
    2: { name: 'Legendary Resistance (3/Day)', desc: "When the solar fails a saving throw, it can choose to succeed instead. When it does so, it wards itself with its sword, which dissolves into glowing particles of light. The solar's sword re-forms at the beginning of its next turn. Until then, the solar has no sword and can't use Forceful Parry or attack with its holy sword." }
    3: { name: 'Magic Resistance', desc: 'The solar has advantage on saving throws against spells and magical effects.' }
actions:
    - { name: Multiattack, desc: 'The solar attacks twice with its holy sword.' }
    - { name: 'Holy Sword', desc: 'Melee Weapon Attack: +16 to hit, reach 10 ft., one target. Hit: 23 (4d6 + 9) slashing damage plus 21 (6d6) radiant damage.' }
    - { name: 'Column of Flame', desc: 'Flame erupts in a 10-foot-radius, 30-foot-tall cylinder centered on a point the solar can see within 60 feet of it. Each creature in the area makes a DC 21 Dexterity saving throw, taking 21 (6d6) fire damage and 21 (6d6) radiant damage of a failure, or half as much damage on a success.' }
reactions:
    - { name: 'Forceful Parry (While Bloodied)', desc: "When a creature misses the solar with a melee attack, the solar's parrying sword sparks with energy. The attacker takes 21 (6d6) lightning damage and makes a DC 24 Constitution saving throw. On a failure, it is pushed 10 feet away and falls prone." }
'legendary actions':
    - { name: 'The solar can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. The solar regains spent legendary actions at the start of its turn." }
    - { name: Teleport, desc: 'The solar magically teleports up to 120 feet to an empty space it can see.' }
    - { name: 'Heal (3/Day)', desc: 'The solar touches a creature other than itself, magically healing 60 hit points of damage and ending any blindness, curse, deafness, disease, or poison on the target.' }
    - { name: 'Deafening Command (Costs 2 Actions)', desc: "The solar speaks an echoing command. Each creature of the solar's choice within 30 feet that can hear the solar and understands a language makes a DC 24 Charisma saving throw. Each creature that succeeds on the saving throw takes 21 (6d6) thunder damage. Each creature that fails its saving throw immediately takes a certain action, depending on the solar's command. This is a magical charm effect." }
    - { name: 'Abase yourself! The creature falls prone', desc: '' }
    - { name: 'Approach! The creature must use its reaction, if available, to move up to its Speed toward the solar by the most direct route that avoids hazards, not avoiding opportunity attacks', desc: '' }
    - { name: 'Flee! The creature must use its reaction, if available, to move up to its Speed away from the solar, not avoiding opportunity attacks', desc: '' }
    - { name: 'Surrender! The creature drops anything it is holding', desc: '' }
combat:
    - { name: 'The solar uses Column of Flame if it can scorch many enemies, or its holy sword otherwise', desc: 'It uses Teleport to escape danger and pursue particular foes. Angels know no fear, and the solar will die if it believes it is necessary, but it is aware of its own strategic value and will retreat from a losing battle.' }

---
```statblock
monster: Solar - A5E
```
