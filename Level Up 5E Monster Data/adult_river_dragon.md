---
statblock: true
name: 'Adult River Dragon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Dragon
cr: 17
ac: 18
hp: 252
hit_dice: '24d12 + 96'
speed: '60 ft., fly 80 ft., swim 90 ft.'
stats:
    - 18
    - 20
    - 18
    - 14
    - 20
    - 16
damage_resistances: 'damage from nonmagical weapons'
condition_immunities: fatigue
saves:
    - { dexterity: 9 }
    - { constitution: 8 }
    - { intelligence: 6 }
    - { wisdom: 9 }
    - { charisma: 7 }
skillsaves:
    - { acrobatics: 8 }
    - { deception: 7 }
    - { insight: 9 }
    - { nature: 6 }
    - { perception: 9 }
    - { stealth: 9 }
senses: 'darkvision 120 ft., tremorsense 200 ft. (only detects vibrations in water), passive Perception 19'
languages: 'Aquan, Common, Draconic'
traits:
    0: { name: Amphibious, desc: 'The dragon can breathe air and water.' }
    1: { name: 'Flowing Grace', desc: "The dragon doesn't provoke opportunity attacks when it flies or swims out of an enemy's reach." }
    2: { name: 'Legendary Resistance (3/Day)', desc: 'When the dragon fails a saving throw, it can choose to succeed instead. When it does, it loses coordination as white-crested waves run up and down its body. It loses its Flowing Grace and Shimmering Scales traits until the beginning of its next turn.' }
    3: { name: 'Shimmering Scales', desc: 'While in water, the dragon gains three-quarters cover from attacks made by creatures more than 30 feet away.' }
    4: { name: 'Essence Link', desc: 'The essence dragon is spiritually linked to a specific area or landmark. The dragon gains no benefit from a long rest when more than 1 mile away from its linked area. If the dragon dies, the area it is linked to loses its vital essence until it forms a new essence dragon, which can take centuries. When a creature first enters an area that has lost its vital essence in this way, they gain a level of fatigue and a level of strife. This fatigue and strife can be removed only by completing a long rest outside the area.' }
    5: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 15). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:create or destroy water, fog cloud, control water, freedom of movement']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +11 to hit, reach 10 ft., one target. Hit: 21 (3d10 + 5) piercing damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +11 to hit, reach 5 ft., one target. Hit: 18 (3d8 + 5) slashing damage.' }
    - { name: 'Torrential Breath (Recharge 56)', desc: 'The dragon exhales water in a 60-foot-long, 5-foot-wide line. Each creature in the area makes a DC 18 Dexterity saving throw, taking 56 (16d6) bludgeoning damage on a failed save or half damage on a success. A creature that fails the save is also knocked prone and is pushed up to 30 feet away. A creature that impacts a solid object takes an extra 10 (3d6) bludgeoning damage.' }
reactions:
    - { name: 'Snap Back (While Bloodied)', desc: 'When a creature the dragon can see hits it with a melee weapon attack, the dragon makes a bite attack against the attacker.' }
'bonus actions':
    - { name: Whirlpool, desc: 'A cylindrical, 15-foot-tall, 10-foot-radius whirlpool or waterspout magically appears in the water or air, centered on a point within 60 feet. Creatures in the area make a DC 18 Strength saving throw. On a failure, a creature takes 17 (5d6) bludgeoning damage and is knocked prone and pushed up to 15 feet. On a failure, a creature takes half damage.' }
legendary_actions:
    - { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    - { name: 'Dart Away', desc: 'The dragon swims up to half its speed.' }
    - { name: Lurk, desc: 'The dragon takes the Hide action.' }
    - { name: 'River Surge (Costs 2 Actions)', desc: 'The dragon generates a 20-foot-tall, 100-foot-wide wave on the surface of water within 90 feet. The wave travels up to 45 feet in any direction the dragon chooses and crashes down, carrying Huge or smaller creatures and vehicles with it. Vehicles moved in this way have a 25 percent chance of capsizing and creatures that impact a solid object take 21 (6d6) bludgeoning damage.' }
    - { name: 'Sudden Maelstrom (While Bloodied, 1/Day)', desc: 'The dragon magically surrounds itself with a 60-foot-radius maelstrom of surging wind and rain for 1 minute. A creature other than the dragon that starts its turn in the maelstrom or enters it for the first time on a turn makes a DC 18 Strength saving throw. On a failed save, the creature is knocked prone and pushed 15 feet away from the dragon.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Adult River Dragon - A5E
```
