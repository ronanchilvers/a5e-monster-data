---
statblock: true
name: 'Arcane Blademaster - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 19
ac: 20
hp: 256
hit_dice: '27d8 + 135'
speed: '30 ft.'
stats:
    - 20
    - 12
    - 20
    - 20
    - 14
    - 12
saves:
    - { constitution: 11 }
    - { intelligence: 11 }
    - { wisdom: 8 }
skillsaves:
    - { arcana: 11 }
    - { athletics: 11 }
senses: 'passive Perception 12'
languages: 'any six'
traits:
    - { name: Duelist, desc: 'When the blademaster is wielding a single melee weapon, their weapon attacks deal an extra 2 damage (included below).' }
    - { name: 'Magic Resistance', desc: 'The blademaster has advantage on saving throws against spells and magical effects.' }
    - { name: 'Steel Focus', desc: 'The blademaster has advantage on Constitution saving throws made to maintain concentration on spells.' }
spells:
    spells: ['The arcane blademaster is a 20th level spellcaster. Their spellcasting ability is Intelligence (spell save DC 19, +11 to hit with spell attacks). The arcane blademaster has the following wizard spells prepared:', 'Cantrips (at will): acid splash, fire bolt, shocking grasp, true strike', '1st-level (4 slots): burning hands, charm person, magic missile, sleep', '2nd-level (3 slots): magic weapon, misty step, see invisibility', '3rd-level (3 slots): dispel magic, fireball, fly, lightning bolt, tongues', '4th-level (3 slots): fire shield, stoneskin, wall of fire', '5th-level (3 slots): cone of cold, conjure elemental, hold monster, telekinesis', '6th-level (2 slots): globe of invulnerability, sunbeam', '7th-level (2 slots): teleport, unholy star', '8th-level (1 slot): power word stun', '9th-level (1 slot): meteor swarm']
    0: { name: 'Superior Heavy Armor Master', desc: 'While wearing heavy armor, the blademaster reduces any bludgeoning, piercing, or slashing damage they take from nonmagical weapons by 5.' }
actions:
    - { name: Multiattack, desc: 'The arcane blademaster attacks four times and casts a cantrip.' }
    - { name: Longsword, desc: 'Melee Weapon Attack: +11 to hit, reach 5 ft., one target. Hit: 11 (1d8 + 7) slashing damage.' }
    - { name: 'Composite Longbow', desc: 'Ranged Weapon Attack: +11 to hit, range 150/600 ft., one target. Hit: 9 (1d8 + 5) piercing damage.' }
    - { name: 'Shocking Grasp (Cantrip; V, S)', desc: "Melee Spell Attack: +11 to hit, reach 5 ft., one creature. Hit: 18 (4d8) lightning damage, and the target can't take reactions until the start of its next turn." }
    - { name: 'Fire Bolt (Cantrip; V, S)', desc: 'Ranged Spell Attack: +11 to hit, range 120 ft., one target. Hit: 22 (4d10) fire damage.' }
    - { name: 'Globe of Invulnerability (6th-Level; V, S, M, Concentration)', desc: "A glimmering 10-foot-radius sphere appears around the blademaster. It remains for 1 minute and doesn't move with the blademaster. Any 5th-level or lower spell cast from outside the sphere can't affect anything inside the sphere, even if cast with a higher level spell slot. Targeting something inside the sphere or including the sphere's space in an area has no effect on anything inside." }
    - { name: 'Teleport (7th-Level; V)', desc: 'The blademaster teleports to a location they are familiar with on the same plane of existence.' }
    - { name: 'Unholy Star (7th-Level; V, S)', desc: "A meteor explodes at a point the blademaster can see 100 feet directly above them. Each creature within 120 feet that can see the meteor (other than the blademaster) makes a DC 19 Dexterity saving throw. On a failure, it is blinded until the end of the blademaster's next turn. Four fiery chunks of the meteor then plummet to the ground at different points chosen by the blademaster that are within range, to explode in 5-foot-radius areas. Each creature in an area makes a DC 19 Dexterity saving throw, taking 21 (6d6) fire damage and 21 (6d6) necrotic damage on a failed save or half damage on a successful one. A creature in more than one area is affected only once. Flammable unattended objects catch fire." }
    - { name: 'Power Word Stun (8th-Level; V)', desc: 'The blademaster utters a powerful word that stuns one creature that has 150 hit points or less and is within 60 feet (if it has more hit points, it is instead rattled until the end of its next turn). The creature repeats the saving throw at the end of each of its turns, ending the effect on a success.' }
    - { name: 'Meteor Swarm (9th-Level; V, S)', desc: 'Scorching 40-foot-radius spheres of flame strike the ground at 4 different points chosen by the blademaster within 1 mile. The effects of a sphere reach around corners. Creatures and objects in the area make a DC 19 Dexterity saving throw, taking 49 (14d6) fire damage and 49 (14d6) bludgeoning damage on a failure or half damage on a success. A creature in more than one area is affected only once. Flammable unattended objects catch fire.' }
'bonus actions':
    - { name: 'Improved War Magic', desc: 'When the blademaster uses an action to cast a spell, they can make one weapon attack.' }
    - { name: 'Misty Step (2nd-Level; V)', desc: "The blademaster teleports to an unoccupied space they can see within 30 feet. The blademaster can't cast this spell and a 1st-level or higher spell on the same turn." }

---
```statblock
monster: Arcane Blademaster - A5E
```
