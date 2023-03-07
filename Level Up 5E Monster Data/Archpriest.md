---
statblock: true
name: 'Archpriest - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 16
ac: 20
hp: 150
hit_dice: '20d8 + 60'
speed: '30 ft.'
stats:
    - 18
    - 10
    - 16
    - 14
    - 20
    - 16
damage_resistances: radiant
saves:
    - { intelligence: 7 }
    - { wisdom: 10 }
    - { charisma: 8 }
skillsaves:
    - { insight: 10 }
    - { medicine: 10 }
    - { persuasion: 8 }
    - { religion: 10 }
senses: 'passive Perception 15'
languages: 'any three'
traits:
    - { name: 'Anointed Healing', desc: 'Whenever the archpriest casts a spell that restores hit points, that spell restores an extra 11 (2d10) hit points.' }
    - { name: 'Magic Resistance', desc: 'The archpriest has advantage on saving throws against spells and magical effects.' }
spells:
    spells: ['The archpriest is a 20th level spellcaster. Their spellcasting ability is Wisdom (spell save DC 18, +10 to hit with spell attacks). The archpriest has the following cleric spells prepared.', 'Cantrips (at will): light, mending, sacred flame, spare the dying, thaumaturgy', '1st-level (4 slots): bane, bless, cure wounds, inflict wounds', '2nd-level (3 slots): hold person, lesser restoration, spiritual weapon', '3rd-level (3 slots): bestow curse, dispel magic, revivify', '4th-level (3 slots): banishment, guardian of faith, stone shape', '5th-level (3 slots): contagion, flame strike, greater restoration, mass cure wounds', '6th-level (2 slots): blade barrier, planar ally, true seeing', '7th-level (2 slots): conjure celestial, divine word, fire storm', '8th-level (1 slot): antimagic field', '9th-level (1 slot): mass heal']
actions:
    - { name: Multiattack, desc: 'The archpriest attacks twice.' }
    - { name: Mace, desc: 'Melee Weapon Attack: +9 to hit, reach 5 ft., one target. Hit: 8 (1d6 + 5) bludgeoning damage plus 10 (3d6) radiant damage.' }
    - { name: 'Flame Strike (5th-Level; V, S, M)', desc: 'A column of divine flame fills a 10-foot-radius, 40-foot-high cylinder within 60 feet. Creatures in the area make a DC 18 Dexterity saving throw, taking 14 (4d6) fire damage and 14 (4d6) radiant damage on a failure or half damage on a success.' }
    - { name: 'Fire Storm (7th-Level; V, S)', desc: "Flames roar from areas within 120 feet in a contiguous group of ten 10-foot cubes in an arrangement the archpriest chooses. Creatures in the area make a DC 18 Dexterity saving throw, taking 38 (7d10) fire damage on a failure or half damage on a success. The spell damages objects in the area and ignites flammable objects that aren't being worn or carried." }
    - { name: 'Holy Aura (8th-Level; V, S, M, Concentration)', desc: "Holy radiance emanates from the archpriest and fills a 30-foot radius around them, targeting creatures in the area of the archpriest's choice. Targets shed dim light in a 5-foot radius and have advantage on saving throws. Attacks made against a target have disadvantage. When a fiend or undead hits a target, the aura erupts into blinding light, forcing the attacker to succeed on a DC 18 Constitution saving throw or be blinded until the spell ends (up to 1 minute)." }
    - { name: 'Mass Heal (9th-Level; V, S)', desc: 'Healing energy erupts from the archpriest and restores up to 700 hit points amongst any number of creatures within 60 feet that are not constructs or undead. Creatures healed in this way are also cured of any diseases, and any effect causing them to be blinded or deafened. In addition, on subsequent turns within the next minute the archpriest can use a bonus action to distribute any unused hit points.' }
'bonus actions':
    - { name: 'Divine Word (7th-Level; V)', desc: 'The archpriest utters a primordial imprecation that targets other creatures within 30 feet. A target suffers an effect based on its current hit points.' }
    - { name: 'Fewer than 50 hit points: deafened for 1 minute', desc: '' }
    - { name: 'Fewer than 40 hit points: blinded and deafened for 10 minutes', desc: '' }
    - { name: 'Fewer than 30 hit points: stunned, blinded, and deafened for 1 hour', desc: '' }
    - { name: 'Fewer than 20 hit points: instantly killed outright', desc: '' }
    - { name: " Additionally, any celestial, elemental, fey, or fiend affected by this spell is immediately forced back to its home plane, and for 24 hours it is unable to return to the archpriest's current plane by any means less powerful than a wish spell", desc: "Such a creature does not suffer this effect if it is already on its plane of origin. The archpriest can't cast this spell and a 1st-level or higher spell on the same turn." }
    - { name: "Archpriests head religious orders and often serve on a monarch's council", desc: 'Sometimes an archpriest is the highest-ranking leader in the land, and they are often considered the direct mouthpieces of their gods by those who worship.' }

---
```statblock
monster: Archpriest - A5E
```
